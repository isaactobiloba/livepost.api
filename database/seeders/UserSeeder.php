<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Traits\ManageForeignKeyChecks;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use TruncateTable, ManageForeignKeyChecks;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('users');
        User::factory(10)->create();
        $this->enableForeignKeys();
    }
}