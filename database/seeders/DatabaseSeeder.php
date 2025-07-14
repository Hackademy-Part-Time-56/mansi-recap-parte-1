<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'title' => 'Card 1',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'image' => 'https://picsum.photos/seed/aaapicsum/235/250',
            'quantity' => 0,
        ]);
        Product::create([
            'title' => 'Card 2',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'image' => 'https://picsum.photos/seed/dddd/235/250',
            'quantity' => 2,
        ]);
        Product::create([
            'title' => 'Card 3',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'image' => 'https://picsum.photos/seed/picsum/235/250',
            'quantity' => 10,
        ]);
        Product::create([
            'title' => 'Card 4',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'image' => 'https://picsum.photos/seed/aaaoiyu/235/250',
            'quantity' => 3,
        ]);
    }
}
