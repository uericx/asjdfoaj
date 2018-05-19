<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
use App\Category;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subcategory = new Subcategory; 
        $subcategory->codigo='CNR04R';
        $subcategory->descripcion='Crudo natural rojo';
        $subcategory->category()->associate(1);
        $subcategory->save();
        $subcategory = new Subcategory; 
        $subcategory->codigo='CNR09V';
        $subcategory->descripcion='Crudo natural verde';
        $subcategory->category()->associate(1);
        $subcategory->save();
        $subcategory = new Subcategory; 
        $subcategory->codigo='CR048N';
        $subcategory->descripcion='Crudo negro';
        $subcategory->category()->associate(2);
        $subcategory->save();
        $subcategory = new Subcategory; 
        $subcategory->codigo='CR095N';
        $subcategory->descripcion='Crudo naranja';
        $subcategory->category()->associate(2);
        $subcategory->save();
    }
}
