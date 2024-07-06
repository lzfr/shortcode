<?php
namespace Lzfr\Shortcode\Facade;

use Illuminate\Support\Facades\Facade;
use Lzfr\Shortcode\ShortcodeGenerator;

class Generator extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return ShortcodeGenerator::class;
    }
}