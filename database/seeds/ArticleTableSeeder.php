<?php

use Illuminate\Database\Seeder;
use App\Http\Model\Article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Article::class, 50)->create();
    }
}
