<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'prodi' => Str::random(10),
            'nit' => Str::random(10),
            'gender' => 'Laki-laki',
            'email' => Str::random(10).'@example.com',            
            'password' => Hash::make('password'),
        ]);
    }
}