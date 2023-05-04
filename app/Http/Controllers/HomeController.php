<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuCollection;
use App\Http\Resources\ServiceCollection;
use App\Models\Menu;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get all menus
        $services = new ServiceCollection(Service::all());

        return view("home")->with(["services" => $services]);
    }
}