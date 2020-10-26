<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call(UserSeeder::class);
		DB::table('users')->insert([
			'name' => 'Adminin',
			'email' => 'restructuracion-cognitiva@websysfan.com',
			'password' => bcrypt('passGeneral.2020'),
			'created_at' => '2020-10-21 16:58:03',
			'updated_at' => '2020-10-22 17:58:03',
		]);
		DB::table('users')->insert([
			'name' => ' J S L ',
			'email' => 'admin@admin.com',
			'password' => bcrypt('password.es.admin'),
			'created_at' => '2020-10-22 16:58:03',
			'updated_at' => '2020-10-22 17:58:03',
		]);

		DB::table('thoughts')->insert([
			'uno' => 'uno',
			'dos' => 'dos',
			'tres' => 'tres',
			'cuatro' => 'cuatro',
			'cinco' => 'cinco',
			'seis' => 'seis',
			'created_at' => '2020-10-25 16:58:03',
			'updated_at' => '2020-10-25 17:58:03',
		]);
	}
}
