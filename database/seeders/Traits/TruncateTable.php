<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    /**
     * Run the database seeds.
     */
    public function truncate(string $table): void
    {
        DB::table($table)->truncate();
    }
}