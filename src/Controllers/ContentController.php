<?php
/**
 * Created by PhpStorm.
 * User: oleksandr
 * Date: 29.03.17
 * Time: 17:56
 */

namespace HelloWorldPlenty\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorldPlenty::content.hello');
    }
}