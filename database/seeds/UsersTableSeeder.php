<?php

use Illuminate\Database\Seeder;
use App\UserType;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User; 
        $user->name = 'Isaac';
		$user->email = 'uericx@gmail.com';
		$user->password = '123456';
		$user->userType()->associate(1);
		$user->save();
		$user = new User; 
        $user->name = 'Joe';
		$user->email = 'joe@gmail.com';
		$user->password = '123456';
		$user->userType()->associate(2);
		$user->save();
    }
}
