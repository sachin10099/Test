<?php

use App\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	State::truncate();
        $base_url = \URL::to('/');
    	$states = file_get_contents($base_url.'/demo_project/states.json');
    	$data = json_decode($states, true);
    	for ($i=0; $i < count($data); $i++) { 
    		State::create(
                    [
                        'name' => $data[$i]['state']
                    ]
                );
		}
    	dd('Inserted Successfully');  
    }
}
