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
                "name" => "Web Design",
                "desc" => "Consider the vast of science and the doctrine of evolution. Every years beast.",
                "slug" => "web-design",
                "icon" => "fa fa-linkedin",
            ],
            [
                "name" => "Branding",
                "desc" => "Consider the vast of science and the doctrine of evolution. Every years beast.",
                "slug" => "branding",
                "icon" => "fa fa-linkedin",
            ],
            [
                "name" => "Mobile Apps",
                "desc" => "Consider the vast of science and the doctrine of evolution. Every years beast.",
                "slug" => "mobile-apps",
                "icon" => "fa fa-linkedin",
            ],
            [
                "name" => "Motion",
                "desc" => "Consider the vast of science and the doctrine of evolution. Every years beast.",
                "slug" => "motion",
                "icon" => "fa fa-linkedin",
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}