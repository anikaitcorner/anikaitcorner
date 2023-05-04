<?php

namespace App\View\Components;

use App\Http\Resources\InfoResource;
use App\Http\Resources\MenuResource;
use App\Models\Info;
use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // get nav menu
        $nav_menu = new MenuResource(Menu::where(["type" => "nav_menu"])->first());
        // encode nav menu
        $nav_menu = json_encode($nav_menu);

        // get social media menu
        $social_media = new MenuResource(Menu::where(["type" => "social_media"])->first());
        // encode social media menu
        $social_media = json_encode($social_media);

        // get social media menu
        $contact_us = new MenuResource(Menu::where(["type" => "contact_us"])->first());
        // encode social media menu
        $contact_us = json_encode($contact_us);

        // get info
        $info = new InfoResource(Info::first());
        // encode info
        $info = json_encode($info);

        // return view
        return view('components.footer')->with(["nav_menu" => $nav_menu, "social_media" => $social_media, "contact_us" => $contact_us, "info" => $info]);
    }
}