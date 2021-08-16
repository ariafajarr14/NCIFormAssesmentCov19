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
            'role' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@nci.id',
            'divisi' => 'Admin',
            'jenis_kelamin' => 'Unknown',
            'password' => bcrypt(123456),
            'remember_token' => Str::random(60)
            ]);

        DB::table('users')->insert([
            'id' => 2,
            'role' => 'employee',
            'name' => 'Aria Fajar Ramdhany',
            'email' => 'aria@nci.id',
            'divisi' => 'Divisi Marketing',
            'jenis_kelamin' => 'Laki-laki',
            'password' => bcrypt(123456),
            'remember_token' => Str::random(60)
            ]);
    }
}
