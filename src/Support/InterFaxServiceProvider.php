<?php

namespace Iivannov\Larasquare\Support;

use Iivannov\InterFax\InterFax;
use Illuminate\Support\ServiceProvider;

class InterFaxServiceProvider extends ServiceProvider {


    public function register()
    {
        $this->app->bind('interfax', function($app) {

            $username = config('services.interfax.username');
            $password = config('services.interfax.password');

            if(!$username || !$password)
                throw new \InvalidArgumentException('Missing username or password in configuration files');

            return new InterFax($username, $password);
        });

    }
}