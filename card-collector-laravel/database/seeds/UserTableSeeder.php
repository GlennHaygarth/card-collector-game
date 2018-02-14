<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    App\User::create(array(
        'name'     => 'Glenn',
        'email'    => 'Glenn@haygarth.com',
        'password' => Hash::make('password'),
    ));
}

}