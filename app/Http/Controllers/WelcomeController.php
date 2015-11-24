<?php

namespace Neg\Http\Controllers;

use Neg\Http\Requests;

class WelcomeController extends NegBaseController
{
    /**
     * Redirect "/" to "/home".
     *
     * @return Response
     */
    public function index()
    {
        return redirect(route('home.index'));
    }

    /**
     * Show the Landing page.
     *
     * @return Response
     */
    public function home()
    {

        $theme = \Theme::uses('frontend')->layout('home');

        $view = [
            'text' => 'We\'re home safe'
        ];

        // home.index will look up the path 'resources/views/home/index.blade.php'
        return $theme->of('home.index', $view)->render(200);
    }
}
