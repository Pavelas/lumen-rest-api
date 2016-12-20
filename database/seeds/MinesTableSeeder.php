<?php

use App\Models\Mine;
use Illuminate\Database\Seeder;

class MinesTableSeeder extends Seeder {

	public function run()
	{
		$user = Mine::create([
			'name' => 'Basic Mine',
			'description' => 'This is basic mine. You can demine it just by pressing the button.',
		]);
	}

}
