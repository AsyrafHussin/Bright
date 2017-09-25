<?php

namespace App\Controllers;

use Bright\Controller\Controller;
use Bright\View\View;
/**
 * Home controller
 */
class Home extends Controller
{
    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        // View::render('index.php', [
        //       'name' => 'Bright Framework',
        //       'author' => 'Asyraf Hussin'
        //     ]);       
             
        // Render with twig     
        View::renderTemplate('index.php', [
          'name' => 'Bright Framework',
          'author' => 'Asyraf Hussin'
        ]);
    }
}
