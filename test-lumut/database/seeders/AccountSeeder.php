<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                'username' => 'admin',
                'name' => 'Administrator',
                'role' => 'admin',
                'password' => Hash::make('admin'),
            ],
            [
                'username' => 'author',
                'name' => 'Author',
                'role' => 'author',
                'password' => Hash::make('author'),
            ],
        ]);
    }
}
