<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Mail\AduanDiverifikasiNotification;
use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class VerifikasiAduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::with(['user', 'hasil_uji.pengujian.form_pengajuan.instansi.user'])->get();

        return Inertia::render('pegawai/aduan/Index', [
            'aduan' => $aduan
        ]);
    }

    public function show(Aduan $aduan)
    {
        $aduan->load(['user', 'hasil_uji.pengujian.form_pengajuan.instansi.user']);

        return Inertia::render('pegawai/aduan/Show', [
            'aduan' => $aduan
        ]);
    }

    public function verifikasi($id, Request $request)
    {
        $user = Auth::user();
        $aduan = Aduan::with(['hasil_uji.pengujian.form_pengajuan'])->findOrFail($id);

        if (in_array($aduan->status, ['diterima_administrasi', 'diterima_pengujian', 'ditolak'])) {
            return Redirect::back()->withErrors(['Aduan sudah diverifikasi dan tidak dapat diubah lagi.']);
        }

        $request->validate([
            'status' => 'required|in:diterima_administrasi,diterima_pengujian,ditolak',
        ]);

        $aduan->update([
            'status' => $request->status,
            'diverifikasi_oleh' => $user->nama,
        ]);

        if ($aduan->status === 'diterima_administrasi') {
            $aduan->hasil_uji->update([
                'status' => 'revisi',
            ]);
        } elseif ($aduan->status === 'diterima_pengujian') {
            $aduan->hasil_uji->pengujian->update([
                'status' => 'diproses',
            ]);
            $aduan->hasil_uji->update([
                'status' => 'revisi',
            ]);
        } else {
            $aduan->hasil_uji->update([
                'status' => 'proses_peresmian'
            ]);
        }

        return Redirect::route('pegawai.aduan.index')->with('message', 'Aduan Berhasil Diverifikasi');
    }
}
