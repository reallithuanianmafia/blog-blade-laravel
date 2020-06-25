<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'HTML',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'parent_id' => 0,
            'slug' => 'html',
        ]);
        DB::table('categories')->insert([
            'name' => 'CSS',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'parent_id' => 0,
            'slug' => 'css',
        ]);
        DB::table('categories')->insert([
            'name' => 'Bootstrap',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'parent_id' => 0,
            'slug' => 'bootstrap',
        ]);
        DB::table('categories')->insert([
            'name' => 'JavaScript',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'parent_id' => 0,
            'slug' => 'javascript',
        ]);
        DB::table('categories')->insert([
            'name' => 'PHP',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'parent_id' => 0,
            'slug' => 'php',
        ]);
        DB::table('categories')->insert([
            'name' => 'Laravel',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'parent_id' => 5,
            'slug' => 'laravel',
        ]);
    }
}
