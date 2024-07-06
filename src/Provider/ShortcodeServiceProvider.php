<?php
namespace Lzfr\Shortcode;

class ShortcodeServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        $this->app->singleton('shortcode', function () {
            return new ShortcodeGenerator();
        });
    }

    public function boot()
    {

    }
}
