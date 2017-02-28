<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->deletr();
        User::create([
        	'name' => 'maxime',
        	'email' => 'maximerle@gmail.com',
        	'password' => bcrypt('maxime')
        	]);
    }
}
