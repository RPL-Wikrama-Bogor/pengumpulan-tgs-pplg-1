<?php

namespace Database\Seeders;
use App\models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'Administrator',
            'email' => 'apotek_admin@gmail.com',
            'password'=> Hash::make('adminapotek'),
            'role' => 'admin',
        ]);
    }
}
