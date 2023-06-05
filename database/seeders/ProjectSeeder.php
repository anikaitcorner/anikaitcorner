<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                "name" => "Apple Tonik",
                "slug" => "apple_tonik",
                "tag" => "SEO & Marketing",
                "thumbnail" => "img/projects/square/2.jpg",
                "category_id" => 2
            ],
            [
                "name" => "Slumber",
                "slug" => "slumber",
                "tag" => "Reactjs",
                "thumbnail" => "img/projects/square/1.jpg",
                "category_id" => 1
            ],
            [
                "name" => "Steel Bottle",
                "slug" => "steel-bottle",
                "tag" => "Laravel & MySql",
                "thumbnail" => "img/projects/square/4.jpg",
                "category_id" => 3
            ],
            [
                "name" => "Altered",
                "slug" => "altered",
                "tag" => "Vuejs",
                "thumbnail" => "img/projects/square/7.jpg",
                "category_id" => 1
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}