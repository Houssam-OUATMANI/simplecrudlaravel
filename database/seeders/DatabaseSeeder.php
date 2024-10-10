<?php

namespace Database\Seeders;

use App\Models\Category;
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
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        */
        /*
        Product::create([
            "title" => "Title 4",
            "price" => 99.99,
            "description" => "title 4 description",
        ],
        [
            "title" => "Title 5",
            "price" => 59.99,
            "description" => "title 5 description",
        ]

    );
    */

        Category::create([
            "name" => "categorie 1"
        ]);


    }
}
