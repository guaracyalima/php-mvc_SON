<?php
/**
 * Created by PhpStorm.
 * User: guabirabadev
 * Date: 05/04/2017
 * Time: 17:24
 */

namespace App\Controllers;


class IndexController
{

    public function index()
    {
        echo "Route: / Controller: index";
    }

    public function contact()
    {
        echo "Route: /contact Controller: contact";
    }
}