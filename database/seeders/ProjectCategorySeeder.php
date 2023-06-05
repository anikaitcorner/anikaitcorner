<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_categories = [
            [
                "label" => "Web Design",
                "tag" => "web_design",
            ],
            [
                "label" => "Branding",
                "tag" => "branding",
            ],
            [
                "label" => "Development",
                "tag" => "development",
            ],
        ];

        foreach ($project_categories as $project_categories) {
            ProjectCategory::create($project_categories);
        }
    }
}