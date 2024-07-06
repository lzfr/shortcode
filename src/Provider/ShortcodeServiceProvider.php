<?php
namespace Lzfr\Shortcode;

class ShortcodeServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * @return void
     */
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
