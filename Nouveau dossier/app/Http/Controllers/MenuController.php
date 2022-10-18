<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::whereNull('menu_id')
            ->with('childrenMenus')
            ->get();
        return view('menus.menus', compact('menus'));
    }
}
