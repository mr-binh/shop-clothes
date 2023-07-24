<?php

namespace App\Services\Manager\Menu;
use Illuminate\Support\Facades\Facade;

class Menu extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'menu';
    }
}
