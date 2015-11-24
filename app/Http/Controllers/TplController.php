<?php

namespace Neg\Http\Controllers;

use Neg\Http\Requests;
use Theme;

class TplController extends NegBaseController
{
    public function index()
    {

        $theme = Theme::uses('template')->layout('global');

        return $theme->scope('index')->render();
    }
}
