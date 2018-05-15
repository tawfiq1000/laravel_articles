<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Article::truncate();
    	(new Faker\Generator)->seed(123);
        factory(App\Article::class,30)->create();
    }
}
