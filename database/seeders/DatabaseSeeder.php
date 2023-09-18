<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'usertype'=>'Admin',
                'numAbonne'=>'1234AB',
                ]);

                User::factory()->create([
                    'name' => 'abonne',
                    'email' => 'abonne@gmail.com',
                    'password' => Hash::make('12345678'),
                    'usertype'=>'Abonne',
                    'numAbonne'=>'1980BB',
                    ]);
    }
}
