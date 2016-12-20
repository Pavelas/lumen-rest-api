<?php

use App\Models\Mine;
use App\Models\User;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{

	public function run()
	{
		for ($i = 1; $i <= 10; $i++) {
			$user = User::first();
			$mine = Mine::first();

			$inventory = new Inventory();
			$inventory->mine_id = $mine->id;

			$user->inventory()->save($inventory);
		}
	}

}
