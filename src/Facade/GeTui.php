<?php

namespace Gogo\GeTui\Facade;



use Illuminate\Support\Facades\Facade;
use Gogo\GeTui\GeTuiService;


/**
 * Class Facade
 * @package Gogo\GeTui
 */
class GeTui extends Facade
{
    public static function getFacadeAccessor()
    {
        return GeTuiService::class;
    }
}