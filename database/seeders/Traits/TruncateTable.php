<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    protected function truncateTable($table)
    {
        DB::table($table)->truncate();
    }

}
