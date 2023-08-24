<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $info = [
            "address" => "Level-6,Sheikh Hasina Software & Technology Park, Jashore",
            "nav_logo" => "/img/logo/logo.png",
            "footer_logo" => "/img/logo/footer-logo.png",
            "copyright" => "@ 2023, Anika IT Corner"
        ];

        Info::create($info);
    }
}