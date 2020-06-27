<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'DATABASE MIGRATION, SEEDING AND FACTORY THINGS UP AND DATE.',
            'description' => 'If a class is the blueprint, then an object is an instance (or implementation) of that blueprint. In this lesson.',
            'content' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'category_id' => 5,
            'keywords' => 'gg',
            'series_id' => 3,
            'user_id' => 1,
            'status' => 1,
            'slug' => 'database-migration-seeding-and-factory-tester',
        ]);
        DB::table('posts')->insert([
            'name' => 'INHERITANCE',
            'description' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'content' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'category_id' => 5,
            'keywords' => 'gg',
            'series_id' => 3,
            'user_id' => 1,
            'status' => 1,
            'slug' => 'inheritance-tester',
        ]);
        DB::table('posts')->insert([
            'name' => 'OBJECTS',
            'description' => 'If a class is the blueprint, then an object is an instance (or implementation) of that blueprint. In this lesson.',
            'content' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'category_id' => 5,
            'keywords' => 'gg',
            'series_id' => 3,
            'user_id' => 1,
            'status' => 1,
            'slug' => 'objects-tester',
        ]);
    }
}
