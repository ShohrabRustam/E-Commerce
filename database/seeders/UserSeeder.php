<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            // 'name' => 'Rustam',
            // 'email' => 'mohdrustam001@gmail.com',
            // 'password' => Hash::make('Rustam@001')
            'name' => 'Shorab',
            'email' => 'shorab@gmail.com',
            'password' => Hash::make('Shorab@001')
        ]);
    }
}
