<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('users')->delete();

		\DB::table('users')->insert(array(
			0 =>
			array(
				'name' => 'Sinaugis',
				'email' => 'admin@sinaugis.com',
				'email_verified_at' => NULL,
				'password' => bcrypt('rahasiadong'),
				'remember_token' => NULL,
				'created_at' => '2023-11-25 06:46:23',
				'updated_at' => '2023-11-25 06:46:23',
			),
			1 =>
			array(
				'name' => 'Mr BangBigs',
				'email' => 'muhammad.fajar1991@gmail.com',
				'email_verified_at' => NULL,
				'password' => bcrypt('rahasiadong'),
				'remember_token' => NULL,
				'created_at' => '2023-11-30 09:45:00',
				'updated_at' => '2023-11-30 09:45:00',
			),
		));
	}
}
