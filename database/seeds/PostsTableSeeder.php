<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $number) {
            \App\Post::create([
                'title' => '測試假文章'.$number, 
                'sub_title' => '這是副標題...',
                'content' => '這是假的文章內容...',
                'page_view' => rand(0,1000),
                'is_feature' => rand(0,1) == 1,
            ]); 
        }
    }
}
