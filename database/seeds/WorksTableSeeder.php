<?php

use Illuminate\Database\Seeder;
use App\Work;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $work = new Work;
		$work->order()->associate(1);
		$work->worker()->associate(1);
		$work->cantidad = 20;
		$work->save();
		$work = new Work;
		$work->order()->associate(2);
		$work->worker()->associate(2);
		$work->cantidad = 30;
		$work->save();
    }
}
