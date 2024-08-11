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
        // Memanggil UserRolesSeeder untuk mengisi tabel user_roles
        $this->call(UserRolesSeeder::class);

        // Menggunakan factory untuk membuat 10 user
        User::factory(10)->create();
    }
}
