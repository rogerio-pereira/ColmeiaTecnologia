<?php

use App\Models\Post;
use App\Models\PostCategory;
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
        factory(PostCategory::class, 3)->create()->each(function($c){
            for($i=0; $i<10; $i++) {
                $c->posts()->save(factory(Post::class)->make(['author_id' => 1]));
            }
        });
    }
}
