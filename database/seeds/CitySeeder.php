<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();
        $base_url = \URL::to('/');
    	$cities = file_get_contents($base_url.'/demo_project/cities.json');
    	$data = json_decode($cities);
    	dd($data);
    	for ($i=0; $i < count($data); $i++) { 
    		City::create(
                    [
                        'name' => $data[$i]['name']
                    ]
                );
		}
    	dd('Inserted Successfully');  
    }
}
