<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 02/10/2018
 * Time: 03:47
 */

namespace SonSlim\Authentication;

use SonSlim\Authentication\Controllers\AuthenticationController;

class Route extends \SonSlim\Core\Route
{
    public function create()
    {
        $this->app->get('/login', AuthenticationController::class.':login');
    }

}