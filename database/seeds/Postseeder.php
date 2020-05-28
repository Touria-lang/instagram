<?php

use App\User;
use Illuminate\Database\Seeder;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        return factory('App\Post',10)->make()->each(function ($post) use ($users){
            $post->user_id = $users->random()->id;
            return $post->save();
        });
    }
}
