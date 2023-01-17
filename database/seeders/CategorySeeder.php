<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Frontend', 'Backend', 'Fullstack'];
        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = Str::slug($category);
            $new_category->save();
        }
    }
}
