<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
                [
                    "title" => "Title 1",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 2",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 3",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 4",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 5",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 6",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 7",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 8",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 9",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ],
                [
                    "title" => "Title 10",
                    "content" => "100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata 100 Kata "
                ]
              ];
              
              DB::table('articles')->insert($articles);
    }
}
