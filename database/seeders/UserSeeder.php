<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'admin1',
            'email'=>'admin1@mail.com',
            'password'=>Bcrypt('admin@123')
        ]);
    }
}
