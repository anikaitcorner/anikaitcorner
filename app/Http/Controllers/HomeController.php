<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuCollection;
use App\Http\Resources\ProjectCategoryCollection;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ServiceCollection;
use App\Models\Menu;
use App\Models\project;
use App\Models\ProjectCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get all menus
        $services = new ServiceCollection(Service::all());

        // get all menus
        $project_categories = new ProjectCategoryCollection(ProjectCategory::all());
        $project_categories = json_encode($project_categories);

        return view("home")->with(["services" => $services, "project_categories" => $project_categories]);
    }
}