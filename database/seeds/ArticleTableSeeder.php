<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new \App\Article([
            'text' => 'Arnold',
            'body' => 'Is a girly man.',
        ]);
        $article->save();
    }
}
