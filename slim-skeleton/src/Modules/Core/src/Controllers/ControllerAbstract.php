<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 02/10/2018
 * Time: 03:44
 */

namespace SonSlim\Core\Controllers;

use Slim\Container;

/**
 * Class ControllerAbstract
 * @package SonSlim\Core\Controllers
 */
abstract class ControllerAbstract
{
    /**
     * @var Container
     */
    protected $c;

    /**
     * ControllerAbstract constructor.
     * @param Container $c
     */
    public function __construct(Container $c)
    {
        $this->c = $c;
    }
}