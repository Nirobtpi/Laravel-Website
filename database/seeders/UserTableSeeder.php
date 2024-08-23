<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Super Admin',
            'user_name'=>'super_admin',
            'email'=>'superadmin@gmail.com',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'user_name'=>'author',
            'email'=>'author@gmail.com',
            'password'=>Hash::make('123456'),
        ]);
    }
}
