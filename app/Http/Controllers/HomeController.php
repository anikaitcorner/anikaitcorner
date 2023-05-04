<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuCollection;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get all menus
        $menus = new MenuCollection(Menu::all());
        // encode menu
        $menus = json_encode($menus);
        return view("home");
    }
}