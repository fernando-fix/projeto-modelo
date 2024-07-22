<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'teste@teste.com')->exists()) {
            User::create([
                'name' => 'Usuário de teste admin',
                'email' => 'teste@teste.com',
                'is_admin' => true,
                'password' => bcrypt('123123123'),
            ]);
        }
        if (!User::where('email', 'teste2@teste.com')->exists()) {
            User::create([
                'name' => 'Usuário de teste comum',
                'email' => 'teste2@teste.com',
                'is_admin' => false,
                'password' => bcrypt('123123123'),
            ]);
        }
    }
}
