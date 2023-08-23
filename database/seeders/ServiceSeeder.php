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
                "desc" => "Crafting exceptional web solutions to fuel your online presence and business growth.",
                "slug" => "web-development",
                "icon" => "fa-solid fa-terminal",
            ],
            [
                "name" => "Digital Marketing",
                "desc" => " Elevating brands through comprehensive digital marketing solutions.",
                "slug" => "branding",
                "icon" => "fa-solid fa-chart-simple",
            ],
            [
                "name" => "Graphics Design",
                "desc" => "Elevating your concepts with our skilled graphic design services, where creativity meets precision to craft visually stunning and impactful solutions.",
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