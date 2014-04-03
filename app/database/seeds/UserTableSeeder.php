<?php
class UserTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'barry@codeup.com';
		$user->password = Hash::make('letmein');
		$user->first_name = 'Barry';
		$user->last_name = 'Niemuth'; 
		$user->admin = "y";
		$user->save();

		$user1 = new User();
		$user1->email = 'John@codeup.com';
		$user1->password = Hash::make('letmein');
		$user1->first_name = 'John';
		$user1->last_name = 'Doe'; 
		$user->admin = "n";
		$user1->save();
	}

}