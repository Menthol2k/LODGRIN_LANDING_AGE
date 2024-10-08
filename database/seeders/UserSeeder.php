<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Octavian Lamba', 'email' => 'octavian@lodgrin.com', 'password' => env('DEFAULT_USER_PASSWORD')]
        ])->each(function ($factory) {
            User::create([
                'name' => $factory['name'],
                'email' => $factory['email'],
                'password' => Hash::make($factory['password'])
            ]);
        });
    }
}
