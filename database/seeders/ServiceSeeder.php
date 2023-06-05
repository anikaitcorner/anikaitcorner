<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                "name" => "Web Development",
                "desc" => "Transforming your vision into stunning websites with expert web services.",
                "slug" => "web-development",
                "icon" => "fa fa-linkedin",
            ],
            [
                "name" => "Digital Marketing",
                "desc" => "Maximize your online reach with our strategic digital marketing solutions.",
                "slug" => "branding",
                "icon" => "fa fa-linkedin",
            ],
            [
                "name" => "Mobile Apps",
                "desc" => "Crafting intuitive mobile experiences with our expert app development.",
                "slug" => "mobile-apps",
                "icon" => "fa fa-linkedin",
            ],
            [
                "name" => "Automate Solutions",
                "desc" => "Streamline your workflows with our efficient automated solutions.",
                "slug" => "automate-solutions",
                "icon" => "fa fa-linkedin",
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}