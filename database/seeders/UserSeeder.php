<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
            'id' => 1,
            'nik_id' => 123123123123,
            'role' => 'admin',
            'name' => 'Admin',
            'divisi' => 'Administrator',
            'jenis_kelamin' => 'Unknown',
            'password' => bcrypt(123123123123),
            'remember_token' => Str::random(60)
            ]);

        DB::table('users')->insert([
            'id' => 2,
            'nik_id' => 321321321321,
            'role' => 'employee',
            'name' => 'Test User',
            'divisi' => 'Divisi Marketing',
            'jenis_kelamin' => 'Laki-laki',
            'password' => bcrypt(321321321321),
            'remember_token' => Str::random(60)
            ]);
    }
}
