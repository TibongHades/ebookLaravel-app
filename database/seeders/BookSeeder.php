<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->create([
            'id'=>1,
            'title' => 'My Wife is a Beautiful CEO',
            'description' => 'This story takes place in Modern China',
            'content' => 'This story takes place in Modern China. However, no matter how much things change, in the depths of society, a secret world of syndicates and hidden factions exist. Yang Chen, a graduate from Harvard who is fluent in English, French, Italian, and German to list a few. He is also capable of fighting and a number of practical skills. Yet he chose to go on the streets to sell fried mutton skewers for a living. Lin Ruoxi is the CEO of a multibillion-dollar company—Yu Lei International. This company is one of the leaders in the cosmetic and fashion industry. Despite being only 20 years old, her ice-cold demeanor and beauty are well-known and unrivaled in Zhonghai City. Due to a wild night consisting of a lot of liquor, fate has brought them together to become husband and wife. And with that, the story begins!',
            'cover_image' => 'https://novelbin.me/media/novel/my-wife-is-a-beautiful-ceo.jpg',
            // 'author_id'=>fake()->randomElement(Author::pluck('id')),
            'author_id'=>1,
        ]);
        Book::factory(30)->create();
    }
}
