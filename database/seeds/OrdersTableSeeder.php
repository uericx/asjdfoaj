<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\User;
use App\Subcategory;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $order = new Order;
        $order->prioridad = 1;
		$order->cantidad = 100;
		$order->subcategory()->associate(1);
		$order->user()->associate(1);
		$order->save();
		$order = new Order;
        $order->prioridad = 2;
		$order->cantidad = 200;
		$order->subcategory()->associate(2);
		$order->user()->associate(2);
		$order->save();


    }
}
