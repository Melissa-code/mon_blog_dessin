<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['huile', 'crayons de couleur', 'fusain', 'aquarelle', 'gouache'];

        for($i = 0; $i < count($categories); $i++) {
            Category::create([
                'label' => $categories[$i],
            ]);
        }
    }
}
