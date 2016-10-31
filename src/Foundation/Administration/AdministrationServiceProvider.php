<?php
/**
 * This file is part of Notadd.
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-21 13:24
 */
namespace Notadd\Foundation\Administration;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use Notadd\Foundation\Administration\Listeners\RouteMatched;
/**
 * Class AdministrationServiceProvider
 * @package Notadd\Admin
 */
class AdministrationServiceProvider extends ServiceProvider {
    /**
     * @return void
     */
    public function boot() {
        $this->app->make(Dispatcher::class)->subscribe(RouteMatched::class);
    }
    /**
     * @return void
     */
    public function register() {
        $this->app->singleton('administration', function($app) {
            return new Administration($app, $app['events']);
        });
    }
}