<?php

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
        DB::table('users')->insert([
            'name' => 'reallithuanianmafia',
            'email' => 'azarguliyev@outlook.com',
            'password' => Hash::make('qweqweqwe'),
        ]);
    }
}
