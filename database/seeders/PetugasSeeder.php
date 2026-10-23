<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 1 akun admin BPBD dengan email dan password tetap
        User::updateOrCreate(
            ['email' => 'admin@bpbd.bandungkab.go.id'],
            [
                'name'     => 'Admin BPBD Kabupaten Bandung',
                'password' => Hash::make('Admin12345'),
            ]
        );

        // 5 akun petugas dummy (nama Indonesia, password di-hash)
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name'     => $faker->name(),
                'email'    => $faker->unique()->safeEmail(),
                'password' => Hash::make('petugas123'),
            ]);
        }
    }
}
