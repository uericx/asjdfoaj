<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category; 
        $category->nombre='Láminas';
        $category->save();
        $category = new Category; 
        $category->nombre='Suela';
        $category->save();
    }
}
