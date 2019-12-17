<?php

use App\User;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new User;
        $a->name = "Niall Quinn";
        $a->email = "njquinn15@gmail.com";
        $a->password = "yourmums";
        $a->no_of_posts = 5;
        $a->bike_name = "Trek";
        $a->save();

       factory(App\User::class,10)->create();
    }
}
