<?php

use App\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        return factory('App\Profile',2)->make()->each(function ($profile) use ($users) {
            $profile->user_id = $users->random()->id;
            return $profile->save();
             
        });
    }
}
