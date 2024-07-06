<?php
namespace Lzfr\Shortcode\Providers;

use Lzfr\Shortcode\ShortcodeGenerator;

/**
 *
 */
class ShortcodeServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * @return void
     */
    public function register() : void
    {
        $this->app->singleton('shortcode', function () {
            return new ShortcodeGenerator();
        });
    }

    public function boot()
    {
        $this->publishes(
            [
                __DIR__.'/../config/shortcode.php' => config_path('shortcode.php'),

            ],
            'shortcode-config'
        );

    }
}
