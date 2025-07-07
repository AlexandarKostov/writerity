<?php

namespace Database\Seeders;

use App\Models\Applicant;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Career;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CareerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);

        User::factory(10)->create();
        Article::factory(10)->create();
        Blog::factory(10)->create();
        Career::factory(10)->create();
        Applicant::factory(10)->create();
    }
}
