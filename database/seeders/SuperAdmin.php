<?php

namespace Database\Seeders;
use DB;
use Hash;
use Illuminate\Database\Seeder;

class SuperAdmin extends Seeder
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
            'name'=>'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make(12345678),

        ]);

    }
}
