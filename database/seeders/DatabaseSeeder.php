<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            GivePermissionToRoleSeeder::class,
            ParameterSeeder::class,
            SubKategoriSeeder::class,
            KategoriSeeder::class,
            JenisCairanSeeder::class,
            KecamatanSeed::class,
            DesaSeed::class,
        ]);
    }
}
