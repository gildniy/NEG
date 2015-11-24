<?php namespace Neg\Http\Controllers;

class DashBoardController extends NegBaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $theme = \Theme::uses('be')->layout('be');

        return $theme->of('users.userpanel.dashboard')
            ->render(200);
    }

    public function dashboard()
    {
        $theme = \Theme::uses('back-end')->layout('default');
        return $theme->of('users.userpanel.home')->render(200);
    }

}