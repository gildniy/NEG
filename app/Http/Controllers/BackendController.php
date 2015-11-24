<?php

namespace Neg\Http\Controllers;

use Illuminate\Http\Request;

use Neg\Http\Requests;
use Neg\Http\Controllers\Controller;
use Theme;

class BackendController extends NegBaseController
{
    public function index()
    {
        $theme = Theme::uses('back-end')->layout('default');

        // home.index will look up the path 'public/themes/back/views/index.php'
        return $theme->scope('index')->render();
    }
}
