<?php

use Illuminate\Database\Seeder;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
['title' =>'Tips Cepat Nikah', 'content'=>'lorem 
	ipsum'],

['title' =>'Haruskah Belajar koding ?', 'content'=>
	'lorem ipsum'],

['title' =>'Membangun Website Dengan laravel', '
	content'=>'loremipsum'],    
];
//masukan data ke database    
DB::table('posts')->insert($posts);
         }
}
