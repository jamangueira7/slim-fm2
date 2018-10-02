<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 02/10/2018
 * Time: 03:40
 */

namespace SonSlim\Core;

use Slim\App;
/**
 * Class Route
 * @package SonSlim\Core
 */
abstract class Route
{
    /**
     * @var App
     */
    protected $app;

    /**
     * Route constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    abstract public function create();
}