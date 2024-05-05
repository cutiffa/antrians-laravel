<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Antrian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Antrian::create([
            'no_antrian' => 'U1',
            'tanggal_antrian' => '2023-01-31',
            'user_id'    => 2,
            'nama'       => 'Abdul Hadi',
            'alamat'     => 'Paloh Lada, Aceh Utara',
            'jenis_kelamin' => 'laki-laki',
            'no_hp'      => '091229248179',
            'no_ktp'     => '11223303928049283',
            'poli'       => 1
        ]);

        User::create([
            'name'      => 'Abdul Hadi',
            'email'     => 'abdulhadi123@gmail.com',
            'password'  => bcrypt('1234'),
            'roles'      => 1
        ]);

        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('1234'),
            'roles'      => 2
        ]);

        User::create([
            'name'      => 'Ivan Ghazi',
            'email'     => 'ivan123@gmail.com',
            'password'  => bcrypt('1234'),
            'roles'      => 1
        ]);
    }
}
