<?php namespace LM\Providers;

class ValidationServiceProvider extends ServiceProvider {

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('LM\Services\Validations\UserValidator', function($app)
        {
            return new UserValidator( $app['validator'] );
        });
    }

}