<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = 1;
        $drink = 2;
        $electronics = 3;
        $cloths = 4;

        $type = new Type();
        $type->name = 'Cellphones';
        $type->id_category = $electronics;
        $type->save();

        $type = new Type();
        $type->name = "TV's";
        $type->id_category = $electronics;
        $type->save();

        $type = new Type();
        $type->name = 'Game consoles';
        $type->id_category = $electronics;
        $type->save();

        $type = new Type();
        $type->name = 'Milk';
        $type->id_category = $drink;
        $type->save();

        $type = new Type();
        $type->name = 'Alcohol';
        $type->id_category = $drink;
        $type->save();

        $type = new Type();
        $type->name = 'Soda';
        $type->id_category = $drink;
        $type->save();

        $type = new Type();
        $type->name = 'Fruits';
        $type->id_category = $food;
        $type->save();

        $type = new Type();
        $type->name = 'Cereals';
        $type->id_category = $food;
        $type->save();

        $type = new Type();
        $type->name = 'Cookies';
        $type->id_category = $food;
        $type->save();
    }
}
