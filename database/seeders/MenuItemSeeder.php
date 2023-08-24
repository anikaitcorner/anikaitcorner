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
                "label" => "Services",
                "route" => "services",
                "slug" => "/services",
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
                "icon" => "fa-brands fa-x-twitter"
            ],
            // [
            //     "label" => "Youtube",
            //     "route" => null,
            //     "slug" => "#",
            //     "menu_id" => 2,
            //     "icon" => "fa fa-youtube-play"
            // ],
            [
                "label" => "Instagram",
                "route" => null,
                "slug" => "#",
                "menu_id" => 2,
                "icon" => "fa fa-instagram"
            ],
            [
                "label" => "anikaitcorner@gmail.com",
                "route" => null,
                "slug" => "mailto:anikaitcorner@gmail.com",
                "menu_id" => 3,
            ],
            [
                "label" => "+880 1887 567 230",
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