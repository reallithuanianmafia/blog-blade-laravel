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
            'name' => 'Laravel 7 - Making Blog Application',
            'description' => 'From very beginning to deployable laravel blog application.',
            'category_id' => 6,
            'slug' => Str::slug('Laravel 7 - Making Blog Application'),
            'seodescription' => 'From very beginning to deployable laravel blog application.',
            'seokeywords' => 'laravel, php, framework, backend, web development',
            'status' => 1,
        ]);
    }
}
