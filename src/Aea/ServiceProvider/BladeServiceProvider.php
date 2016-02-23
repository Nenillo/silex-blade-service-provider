<?php
/**
 * Created by PhpStorm.
 * User: aea
 * Date: 19.02.2016
 * Time: 2:01
 */

namespace Aea\ServiceProvider;

use Aea\Model\BladeProxy;
use Philo\Blade\Blade;
use Silex\Application;
use Silex\ServiceProviderInterface;

class BladeServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['blade'] = $app->share(function () use ($app) {
            return new BladeProxy(new Blade($app['blade.view_paths'], $app['blade.cache_path']));
        });
        $app['blade']->share('app', $app);
    }

    public function boot(Application $app)
    {

    }
}