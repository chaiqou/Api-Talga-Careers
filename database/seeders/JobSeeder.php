<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Support\Str;
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
		$companys = [
			'Redberry',
			'Google',
			'Microsoft',
			'Apple',
			'Amazon',
			'Meta',
		];

		foreach ($companys as  $company)
		{
			Job::create([
				'title'   => Str::random(10),
				'city'    => Str::random(10),
				'company' => $company,
			]);
		}
		Job::factory()->count(50)->create();
	}
}
