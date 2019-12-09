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
        $a->post_id = 60;
        $a->content = "ffffff";
        $a->parent_comment_id = NULL;
        $a->rating = "2";
        $a->save();

        factory(App\Comment::class,10)->create();
    }
}
