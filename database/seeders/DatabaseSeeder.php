<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Pendaftar;
use App\Models\Pengumuman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin123'),
            'role_id'     => 1
        ]);

        User::create([
            'name'      => 'user',
            'email'     => 'user@gmail.com',
            'password'  => bcrypt('user123'),
            'role_id'     => 2
        ]);

        Role::create([
            'role'  => 'admin'
        ]);
        Role::create([
            'role'  => 'pendaftar'
        ]);
    }
}
