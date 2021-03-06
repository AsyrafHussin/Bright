<?php

namespace App\Controllers\Sub;

use Bright\Controller\Controller;
use Bright\View\View;

/**
 * Posts controller
 */
class Posts extends Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'Hello from the index action in the Posts controller!';
        echo '<p>Query string parameters: <pre>' .
             htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
             htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
