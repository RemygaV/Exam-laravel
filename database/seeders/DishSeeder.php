<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nd1 = new Dish();
        $nd1 -> dishName = "Sriuba 1";
        $nd1-> description = "Labai skani sriuba";
        $nd1-> foto_url = "https://www.lamaistas.lt/uploads/modules/recipes/thumb920x573/33893.jpg";
        $nd1-> menuId ="1";
        $nd1-> save();

        $n2 = new Dish();
        $n2->dishName = "Sriuba 2";
        $n2->description = "Irgi visai nieko sriuba";
        $n2->foto_url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzddqsUz_GxW3GXbTRu3spNw0sgOn9PKx-5XlZBHV7uArJuNDWEGHBS2FehT3JpagzG_c&usqp=CAU";
        $n2->menuId ="1";
        $n2-> save();

        $n3 = new Dish();
        $n3->dishName = "Didžkukuliai";
        $n3->description = "Labai skanūs didžkukuliai su grietine ir spirgučiais";
        $n3->foto_url = "https://upload.wikimedia.org/wikipedia/commons/8/81/Cepelinai_2%2C_Vilnius%2C_Lithuania_-_Diliff.jpg";
        $n3->menuId ="2";
        $n3->save();
    }
}
