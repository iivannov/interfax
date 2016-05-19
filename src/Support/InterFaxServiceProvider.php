<?php

namespace Iivannov\InterFax\Support;

use Iivannov\InterFax\InterFax;
use Illuminate\Support\ServiceProvider;

class InterFaxServiceProvider extends ServiceProvider {


    public function register()
    {
        $this->app->bind('interfax', function($app) {

            $config = $app->make('config')->get('services');

            $username = $config['interfax']['username'];
            $password = $config['interfax']['password'];

            if(!$username || !$password)
                throw new \InvalidArgumentException('Missing username or password in configuration files');

            return new InterFax($username, $password);
        });

    }
}
