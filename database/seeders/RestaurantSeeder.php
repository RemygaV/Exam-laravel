<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rn1 = new Restaurant();
        $rn1->name = "Restoranas DIA";
        $rn1->code = "12345678";
        $rn1->address = "Maironio g. 9, 44298 Kaunas Kaunas";
        $rn1->save();

        $rn2 = new Restaurant();
        $rn2->name = "Talutti - Bakes 'n' Shakes City";
        $rn2->code = "87654321";
        $rn2->address = "Vasario 16-osios g. 2, 44250 Kaunas Kaunas";
        $rn2->save();

        $rn3 = new Restaurant();
        $rn3->name = "Restoranas 12";
        $rn3->code = "54321123";
        $rn3->address = "Prūsų g. 4, Kaunas";
        $rn3->save();
    }
}
