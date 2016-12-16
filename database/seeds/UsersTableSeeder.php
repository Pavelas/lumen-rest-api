<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = User::create([
			'username' => 'demo',
			'email' => 'demo@mail.com',
			'password' => 'secret',
		]);
	}

}
