<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
		$this->call('RadioTableSeeder');
		$this->call('OAuth2ClientsTableSeeder');
		$this->call('RadioUserSeeder');
	}

}
