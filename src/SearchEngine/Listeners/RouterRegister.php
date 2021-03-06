<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-11-18 18:53
 */
namespace Notadd\Foundation\SearchEngine\Listeners;

use Notadd\Foundation\Routing\Abstracts\RouteRegister as AbstractRouteRegister;
use Notadd\Foundation\SearchEngine\Controllers\SeoController;

/**
 * Class RouterRegistrar.
 */
class RouterRegister extends AbstractRouteRegister
{
    /**
     * Handle Route Registrar.
     */
    public function handle()
    {
        $this->router->group(['middleware' => ['auth:api', 'cross', 'web'], 'prefix' => 'api/seo'], function () {
            $this->router->post('get', SeoController::class . '@get');
            $this->router->post('set', SeoController::class . '@set');
        });
    }
}
