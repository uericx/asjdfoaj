<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userType = new UserType; 
        $userType->nombre = 'Admin';
        $userType->save();
        $userType = new UserType; 
        $userType->nombre = 'Trabajador';
        $userType->save();


		
    }
}
