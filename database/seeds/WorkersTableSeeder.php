<?php

use Illuminate\Database\Seeder;
use App\Worker;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $worker = new Worker; 
        $worker->nombre='Ericx';
        $worker->apellido='Urias';
        $worker->save();
        $worker = new Worker; 
        $worker->nombre='Joe'; 
        $worker->apellido='Marrón';
        $worker->save();
        $worker = new Worker; 
        $worker->nombre='Fer'; 
        $worker->apellido='Mugica';
        $worker->save();
        $worker = new Worker; 
        $worker->nombre='Chris'; 
        $worker->apellido='Cardenas';
        $worker->save();
    }
}
