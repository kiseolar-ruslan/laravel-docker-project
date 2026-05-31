<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'test'; // той самий ключ що в провайдері
    }
}
