<?php

use Illuminate\Database\Seeder;

class TblUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        DB::table('tbl_users')->insert([
            'role'     => 'ADMIN',
            'email'    => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        // Teacher
        DB::table('tbl_users')->insert([
            'role'     => 'TEACHER',
            'email'    => 'teacher@mail.com',
            'password' => Hash::make('password'),
        ]);

        // Student
        DB::table('tbl_users')->insert([
            'role'     => 'STUDENT',
            'email'    => 'student@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
