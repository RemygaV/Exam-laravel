<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rn1 = new Menu();
        $rn1->menuName = "Sriubos";
        $rn1->restaurantId = "1";
        $rn1->save();

        $rn2 = new Menu();
        $rn2->menuName = "Antri patiekalai";
        $rn2->restaurantId = "2";
        $rn2->save();

    }
}
