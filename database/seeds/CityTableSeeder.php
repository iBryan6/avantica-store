<?php

use App\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->name= 'Cochabamba';
        $city->save();

        $city = new City();
        $city->name= 'Santa Cruz';
        $city->save();

        $city = new City();
        $city->name= 'La Paz';
        $city->save();      
        
        $city = new City();
        $city->name= 'Oruro';
        $city->save();     
        
        $city = new City();
        $city->name= 'Potosi';
        $city->save();      
        
        $city = new City();
        $city->name= 'Sucre';
        $city->save();     
        
        $city = new City();
        $city->name= 'Beni';
        $city->save();    
        
        $city = new City();
        $city->name= 'Pando';
        $city->save();     
        
        $city = new City();
        $city->name= 'Tarija';
        $city->save(); 
    }
}
