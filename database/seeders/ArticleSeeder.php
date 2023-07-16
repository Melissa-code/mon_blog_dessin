<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Articles
        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) {
            Article::create([
                // https://github.com/fzaninotto/Faker#fakerproviderlorem
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(),
                'content' => $faker->text($maxNbChars = 200),
            ]);
        }
    }
}
