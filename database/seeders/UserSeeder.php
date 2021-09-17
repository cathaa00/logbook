<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'superadmin',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Dosen',
            'nip' => '123456789101112130',
            'email' => 'dosen@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'dosen',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Mahasiswa Magang',
            'nim' => '10/123456/PT/123456',
            'email' => 'mahasiswa_magang@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa_magang',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Mahasiswa Hibah',
            'nim' => '11/123456/PT/123456',
            'email' => 'mahasiswa_hibah@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa_hibah',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Mahasiswa Workshop',
            'nim' => '12/123456/PT/123456',
            'email' => 'mahasiswa_workshop@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa_workshop',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
