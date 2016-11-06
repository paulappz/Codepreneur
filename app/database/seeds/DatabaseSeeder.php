<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AreasTableSeeder');
		$this->command->info('Areas table seeded!');
		$this->call('PlacesTableSeeder');
		$this->command->info('Places table seeded!');
		$this->call('ViewsTableSeeder');
		$this->command->info('Views table seeded!');
	}

}
