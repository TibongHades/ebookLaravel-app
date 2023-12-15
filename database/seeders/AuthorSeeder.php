<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory()->create([
            'id'=>1,
            'name' => 'Cabbage Flatbread',
            'bio' => 'Award Winning Chinise novel Writer',
            
        ]);
        Author::factory(10)->create();
    }
}
