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
            "address" => "ROF 1910 Gateway Road, Dhaka, Banani 1205",
            "nav_logo" => "/img/logo/logo-dark.png",
            "footer_logo" => "/img/logo/logo-dark.png",
            "copyright" => "@ 2021, Stukram. Made with passion by Krellion."
        ];

        Info::create($info);
    }
}