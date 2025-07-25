<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = "
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012001', '331301', 'Ngepungsari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012002', '331301', 'Jatipurwo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012003', '331301', 'Jatipuro');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012004', '331301', 'Jatisobo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012005', '331301', 'Jatiwarno');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012006', '331301', 'Jatimulyo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012007', '331301', 'Jatisuko');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012008', '331301', 'Jatiharjo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012009', '331301', 'Jatikuwung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313012010', '331301', 'Jatiroyo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022001', '331302', 'Jatisawit');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022002', '331302', 'Petung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022003', '331302', 'Wonokeling');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022004', '331302', 'Jatiyoso');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022005', '331302', 'Tlobo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022006', '331302', 'Wonorejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022007', '331302', 'Beruk');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022008', '331302', 'Karangsari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313022009', '331302', 'Wukirsawit');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032001', '331303', 'Paseban');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032002', '331303', 'Lemahbang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032003', '331303', 'Jatirejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032004', '331303', 'Kwangsan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032005', '331303', 'Karangbangun');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032006', '331303', 'Ploso');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032007', '331303', 'Giriwondo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032008', '331303', 'Kadipiro');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032009', '331303', 'Jumantoro');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032010', '331303', 'Kedawung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032011', '331303', 'Jumapolo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313032012', '331303', 'Bakalan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042001', '331304', 'Sedayu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042002', '331304', 'Kebak');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042003', '331304', 'Gemantar');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042004', '331304', 'Tunggulrejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042005', '331304', 'Genengan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042006', '331304', 'Ngunut');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042007', '331304', 'Tugu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042008', '331304', 'Sukosari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042009', '331304', 'Sambirejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042010', '331304', 'Blorong');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313042011', '331304', 'Sringin');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052001', '331305', 'Ngadiluwih');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052002', '331305', 'Dawung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052003', '331305', 'Matesih');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052004', '331305', 'Karangbangun');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052005', '331305', 'Koripan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052006', '331305', 'Girilayu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052007', '331305', 'Pablengan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052008', '331305', 'Plosorejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313052009', '331305', 'Gantiwarno');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313061002', '331306', 'Blumbang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313061003', '331306', 'Kalisoro');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313061004', '331306', 'Tawangmangu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062001', '331306', 'Gondosuli');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062005', '331306', 'Sepanjang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062006', '331306', 'Bandardawung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062007', '331306', 'Karanglo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062008', '331306', 'Nglebak');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062009', '331306', 'Plumbon');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313062010', '331306', 'Tengklik');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072001', '331307', 'Puntukrejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072002', '331307', 'Berjo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072003', '331307', 'Girimulyo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072004', '331307', 'Segorogunung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072005', '331307', 'Kemuning');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072006', '331307', 'Nglegok');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072007', '331307', 'Dukuh');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072008', '331307', 'Jatirejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313072009', '331307', 'Ngargoyoso');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082001', '331308', 'Bangsri');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082002', '331308', 'Ngemplak');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082003', '331308', 'Doplang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082004', '331308', 'Gerdu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082005', '331308', 'Karang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082006', '331308', 'Salam');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082007', '331308', 'Karangpandan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082008', '331308', 'Tohkuning');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082009', '331308', 'Gondangmanis');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082010', '331308', 'Dayu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313082011', '331308', 'Harjosari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091001', '331309', 'Lalung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091002', '331309', 'Bolong');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091003', '331309', 'Jantiharjo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091004', '331309', 'Tegalgede');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091005', '331309', 'Jungke');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091006', '331309', 'Cangakan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091007', '331309', 'Karanganyar');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091008', '331309', 'Bejen');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091009', '331309', 'Popongan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091010', '331309', 'Gayamdompo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091011', '331309', 'Delingan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313091012', '331309', 'Gedong');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102001', '331310', 'Buran');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102002', '331310', 'Papahan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102003', '331310', 'Ngijo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102004', '331310', 'Gaum');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102005', '331310', 'Suruh');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102006', '331310', 'Pandeyan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102007', '331310', 'Karangmojo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102008', '331310', 'Kaling');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102009', '331310', 'Wonolopo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313102010', '331310', 'Kalijirak');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112001', '331311', 'Suruhkalang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112002', '331311', 'Jati');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112003', '331311', 'Jaten');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112004', '331311', 'Dagen');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112005', '331311', 'Ngringo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112006', '331311', 'Jetis');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112007', '331311', 'Sroyo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313112008', '331311', 'Brujul');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122001', '331312', 'Ngasem');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122002', '331312', 'Bolon');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122003', '331312', 'Malangjiwan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122004', '331312', 'Paulan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122005', '331312', 'Gajahan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122006', '331312', 'Blulukan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122007', '331312', 'Gawanan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122008', '331312', 'Gedongan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122009', '331312', 'Tohudan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122010', '331312', 'Baturan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313122011', '331312', 'Klodran');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132001', '331313', 'Wonorejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132002', '331313', 'Plesungan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132003', '331313', 'Jatikuwung');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132004', '331313', 'Selokaton');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132005', '331313', 'Bulurejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132006', '331313', 'Rejosari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132007', '331313', 'Jeruksawit');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132008', '331313', 'Karangturi');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132009', '331313', 'Kragan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132010', '331313', 'Wonosari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132011', '331313', 'Dayu');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132012', '331313', 'Tuban');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313132013', '331313', 'Krendowahono');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142001', '331314', 'Banjarharjo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142002', '331314', 'Alastuwo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142003', '331314', 'Macanan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142004', '331314', 'Nangsri');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142005', '331314', 'Kemiri');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142006', '331314', 'Kebak');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142007', '331314', 'Waru');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142008', '331314', 'Pulosari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142009', '331314', 'Malanggaten');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313142010', '331314', 'Kaliwuluh');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152001', '331315', 'Sewurejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152002', '331315', 'Ngadirejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152003', '331315', 'Mojogedang');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152004', '331315', 'Pojok');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152005', '331315', 'Mojoroto');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152006', '331315', 'Kaliboto');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152007', '331315', 'Buntar');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152008', '331315', 'Gebyog');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152009', '331315', 'Gentungan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152010', '331315', 'Pendem');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152011', '331315', 'Pereng');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152012', '331315', 'Munggur');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313152013', '331315', 'Kedungjeruk');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162001', '331316', 'Kuto');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162002', '331316', 'Tamansari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162003', '331316', 'Ganten');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162004', '331316', 'Gempolan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162005', '331316', 'Plosorejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162006', '331316', 'Karangrejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162007', '331316', 'Kwadungan');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162008', '331316', 'Botok');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162009', '331316', 'Sumberejo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313162010', '331316', 'Tawangsari');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172001', '331317', 'Gumeng');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172002', '331317', 'Anggrasmanis');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172003', '331317', 'Jenawi');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172004', '331317', 'Trengguli');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172005', '331317', 'Sidomukti');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172006', '331317', 'Balong');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172007', '331317', 'Seloromo');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172008', '331317', 'Menjing');
                INSERT INTO `desas` (`kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES ('3313172009', '331317', 'Lempong');
        ";


        DB::unprepared($seeds);
    }
}
