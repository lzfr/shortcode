<?php
namespace Lzfr\Shortcode\Facade;

use Illuminate\Support\Facades\Facade;

class Generator extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'shortcode.generator';
    }
}