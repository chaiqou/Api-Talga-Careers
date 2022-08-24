<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Job::factory()->count(50)->create();
    }
}
