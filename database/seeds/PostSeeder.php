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
            'name' => 'Database Migration, Seeding and Factory things up and date.',
            'description' => 'If a class is the blueprint, then an object is an instance (or implementation) of that blueprint. In this lesson.',
            'content' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'category_id' => 5,
            'keywords' => 'database, database migration, seeding, factory, laravel',
            'series_id' => 3,
            'user_id' => 1,
            'status' => 1,
            'slug' => 'database-migration-seeding-and-factory-tester-1',
        ]);
        DB::table('posts')->insert([
            'name' => 'Inheritance',
            'description' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'content' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'category_id' => 5,
            'keywords' => 'inheritance',
            'series_id' => 3,
            'user_id' => 1,
            'status' => 1,
            'slug' => 'inheritance-2',
        ]);
        DB::table('posts')->insert([
            'name' => 'Objects',
            'description' => 'If a class is the blueprint, then an object is an instance (or implementation) of that blueprint. In this lesson.',
            'content' => 'Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that they should go.',
            'category_id' => 5,
            'keywords' => 'gg',
            'series_id' => 3,
            'user_id' => 1,
            'status' => 1,
            'slug' => 'objects-3',
        ]);
    }
}
