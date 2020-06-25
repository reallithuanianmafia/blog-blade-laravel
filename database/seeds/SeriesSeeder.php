<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'name' => 'HTML 5 from scratch.',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'category_id' => 1,
            'slug' => Str::slug('HTML 5 from scratch.'),
        ]);
        DB::table('series')->insert([
            'name' => 'Object Oriented PHP explained',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'category_id' => 5,
            'slug' => Str::slug('Object Oriented PHP explained'),
        ]);
        DB::table('series')->insert([
            'name' => 'Laravel 6.0 - Making Form Application',
            'description' => 'This is just a description, by the way.. Lorem ipsum dolor sit amet.',
            'category_id' => 6,
            'slug' => Str::slug('Laravel 6.0 - Making Form Application'),
        ]);
    }
}
