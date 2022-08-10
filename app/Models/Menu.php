<?php

namespace App\Models;

use App\Models\Menu as ModelsMenu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function childrenMenus()
    {
        return $this->hasMany(Menu::class)->with('menus');
    }
}
