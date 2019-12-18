<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Comment;
        $a->user_id = 20;
        $a->post_id =1;
        $a->content = "ffffff";
        $a->rating = "0";
        $a->save();

        $a = new Comment;
        $a->user_id = 12;
        $a->post_id =1;
        $a->content = "gggggg";
        $a->rating = "0";
        $a->save();
        
        

        factory(App\Comment::class,10)->create();
    }
}
