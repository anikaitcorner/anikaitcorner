<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_items = [
            [
                "label" => "Home",
                "route" => "home",
                "slug" => "/",
                "menu_id" => 1,
            ],
            [
                "label" => "Pricing",
                "route" => "price",
                "slug" => "/price",
                "menu_id" => 1,
            ],
            [
                "label" => "About",
                "route" => "about",
                "slug" => "/about",
                "menu_id" => 1,
            ],
            [
                "label" => "Contact",
                "route" => "contact",
                "slug" => "/contact",
                "menu_id" => 1,
            ],
            [
                "label" => "Linkedin",
                "route" => null,
                "slug" => "#",
                "menu_id" => 2,
                "icon" => "fa fa-linkedin"
            ],
            [
                "label" => "Twitter",
                "route" => null,
                "slug" => "#",
                "menu_id" => 2,
                "icon" => "fa fa-twitter"
            ],
            [
                "label" => "Youtube",
                "route" => null,
                "slug" => "#",
                "menu_id" => 2,
                "icon" => "fa fa-youtube-play"
            ],
            [
                "label" => "Instagram",
                "route" => null,
                "slug" => "#",
                "menu_id" => 2,
                "icon" => "fa fa-instagram"
            ],
            [
                "label" => "info@rof.com",
                "route" => null,
                "slug" => "mailto:rof@rof.com",
                "menu_id" => 3,
            ],
            [
                "label" => "+880 1408-094722",
                "route" => null,
                "slug" => "#",
                "menu_id" => 3,
            ],
        ];

        foreach ($menu_items as $menu_item) {
            MenuItem::create($menu_item);
        }
    }
}