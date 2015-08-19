<?php

namespace Neg\Http\Controllers;

use Neg\Http\Requests;
use Theme;

class TemplateController extends Controller
{

    public function index()
    {

        $theme = Theme::uses('template')->layout('global');

        // home.index will look up the path 'public/themes/default/views/home/index.php'
        return $theme->scope('index')->render();
    }

}
