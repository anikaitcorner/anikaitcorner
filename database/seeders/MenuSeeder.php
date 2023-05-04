<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                "name" => "Navigation Menu",
                "type" => "nav_menu",
            ],
            [
                "name" => "Social Media",
                "type" => "social_media",
            ],
            [
                "name" => "Contact US",
                "type" => "contact_us",
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}