<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(3)->create(["status" => false]);
        // It will create 5*2 = 10 categories with parent_id
        Category::factory()->count(5)->create()->each(function (Category $category) {
            Category::factory()->count(2)->create([
                "parent_id" => $category->id
            ]);
        });
    }
}
