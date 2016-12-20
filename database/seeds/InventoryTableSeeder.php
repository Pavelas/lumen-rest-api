<?php

use App\Models\Mine;
use App\Models\User;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{

    public function run()
    {
        $user = User::first();
        $mine = Mine::first();

        $inventory = new Inventory();
        $inventory->mine_id = $mine->id;

        $user->inventory()->save($inventory);
    }

}
