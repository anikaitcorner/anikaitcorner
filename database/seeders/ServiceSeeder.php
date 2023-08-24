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
                "desc" => "Crafting responsive, intuitive websites to boost your online business presence.",
                "slug" => "web-development",
                "icon" => "fa-solid fa-terminal",
            ],
            [
                "name" => "Digital Marketing",
                "desc" => "Enhancing brand visibility with bespoke, data-led digital marketing solutions.",
                "slug" => "branding",
                "icon" => "fa-solid fa-chart-simple",
            ],
            [
                "name" => "Graphics Design",
                "desc" => "Creating innovative, compelling visuals to elevate your brand's impact.",
                "slug" => "mobile-apps",
                "icon" => "fa-solid fa-pen-nib",
            ],
            [
                "name" => "Automate Solutions",
                "desc" => "Streamline your workflows with our efficient automated solutions.",
                "slug" => "automate-solutions",
                "icon" => "fa-solid fa-robot",
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}