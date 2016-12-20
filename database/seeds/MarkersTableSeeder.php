<?php

use App\Models\Marker;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class MarkersTableSeeder extends Seeder
{

    public function run()
    {        
        $markers = [
        	['item_id' => 1, 'lat' => 55.650348, 'lng' => 12.543245, 'is_active' => 1],
        	['item_id' => 2, 'lat' => 55.651531, 'lng' => 12.541131, 'is_active' => 1],
        	['item_id' => 3, 'lat' => 55.651543, 'lng' => 12.544360, 'is_active' => 1],
        	['item_id' => 4, 'lat' => 55.649522, 'lng' => 12.541925, 'is_active' => 1],
        	['item_id' => 5, 'lat' => 55.649013, 'lng' => 12.542826, 'is_active' => 1],
        ];

        Marker::insert($markers);

    }

}
