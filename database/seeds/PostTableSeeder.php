<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Post;
        $a->user_id = 20;
        $a->content = "sjjdjsdjjajkdksda";
        $a->rating = "3";
        $a->save();
        //$a->comment()->attach(1);

        factory(App\Post::class,10)->create();
    }
}
