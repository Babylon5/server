<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// guest user
		User::create(array(
				'name' => "Dominik 'the guest' Pichler",
				'email' => "dominik@getbro.com"
			));
	}
}