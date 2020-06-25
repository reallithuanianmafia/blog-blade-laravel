<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'member',
            'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, by the way.',
        ]);
        DB::table('roles')->insert([
            'name' => 'content creator',
            'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, by the way.',
        ]);
        DB::table('roles')->insert([
            'name' => 'moderator',
            'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, by the way.',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 3,
        ]);
        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 2,
        ]);
    }
}
