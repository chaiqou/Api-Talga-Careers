<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;

class JobSeeder extends Seeder
{
	use DisableForeignKeys;

	use TruncateTable;

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->disableForeignKeys();
		$this->truncateTable('jobs');
		$users = Job::factory(1000)->create();
		$this->enableForeignKeys();
	}
}
