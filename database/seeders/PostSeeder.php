<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Seeders\Traits\ManageForeignKeyChecks;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, ManageForeignKeyChecks;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('posts');
        Post::factory(3)->untitled()->create();
        $this->enableForeignKeys();
    }
}