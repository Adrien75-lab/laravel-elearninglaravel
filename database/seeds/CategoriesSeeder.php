<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category();
        $category->icon = '<i class="fas fa-code"></i>';
        $category->name = "Développement web";
        $category->save();

        $category = new Category();
        $category->Icon = '<i class="fas fa-terminal"></i>';
        $category->name = "Développement logiciel";
        $category->save();

        $category = new Category();
        $category->Icon = '<i class="fas fa-terminal"></i>';
        $category->name = "Infrastructure";
        $category->save();
    }
}
