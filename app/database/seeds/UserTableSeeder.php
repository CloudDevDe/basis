// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'Dominik Geimer',
			'email'    => 'info@clouddev.de',
			'password' => Hash::make('1234'),
		));
	}

}
