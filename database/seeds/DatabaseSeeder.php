<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');

		 $this->command->info('Users table seeded!');
	}

}

// Going to see the users' table

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
        User::create([
        			'name' => 'Jeremy Sarda',
        			'email' => 'jsarda@mcclainconcepts.com',
        			'password' => bcrypt('LaravelTestPW')
    				]);
        
        User::create([
        			'name' => 'Semirindi Makala',
        			'email' => 'semirindi.makala@gmail.com',
        			'password' => bcrypt('LaravelTestPW')
    				]);
	}
}