<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait ManageForeignKeyChecks
{
    /**
     * Run the database seeds.
     */
    protected function disableForeignKeys(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    }

    protected function enableForeignKeys(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}