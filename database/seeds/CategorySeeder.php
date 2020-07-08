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
            'id' => 1,
            'name' => 'HTML',
            'description' => 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets.',
            'parent_id' => NULL,
            'slug' => 'hypertext-markup-language-html',
            'seodescription' => 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser.',
            'seokeywords' => 'html, frontend, web development',
            'status' => 1,
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'CSS',
            'description' => 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML.',
            'parent_id' => NULL,
            'slug' => 'cascading-style-sheets-css',
            'seodescription' => 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML.',
            'seokeywords' => 'css, frontend, web development',
            'status' => 1,
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Bootstrap',
            'description' => 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.',
            'parent_id' => NULL,
            'slug' => 'bootstrap',
            'seodescription' => 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.',
            'seokeywords' => 'bootstrap, css, html, frontend, web development',
            'status' => 1,
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'JavaScript',
            'description' => 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification.',
            'parent_id' => NULL,
            'slug' => 'daddy-javascript',
            'seodescription' => 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification.',
            'seokeywords' => 'javascript, frontend,backend,web development',
            'status' => 1,
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'PHP',
            'description' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'parent_id' => NULL,
            'slug' => 'php',
            'seodescription' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'seokeywords' => 'php, backend, web development',
            'status' => 1,
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Laravel',
            'description' => 'Laravel is a free, open-source PHP web framework intended for the development of web applications following the model–view–controller.',
            'parent_id' => 5,
            'slug' => 'laravel',
            'seodescription' => 'Laravel is a free, open-source PHP web framework intended for the development of web applications following the model–view–controller.',
            'seokeywords' => 'laravel, php, framework, backend, web development',
            'status' => 1,
        ]);
    }
}
