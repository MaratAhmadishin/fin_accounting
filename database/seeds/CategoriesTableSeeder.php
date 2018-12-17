<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = ['Food', 'Gas', 'Fun'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
