<?php namespace Neg\Http\Controllers;

use Confide;
use Config;
use Event;
use Flash;
use Input;
use Lang;
use Mail;
use Neg\Events\UserWasLoggedInEvent;
use Neg\Events\UserWasRegisteredEvent;
use Neg\Http\Requests;
use Neg\Http\Requests\CreateUserRequest;
use Neg\Http\Requests\UpdateUserPasswordRequest;
use Neg\Libraries\Repositories\UserRepository;
use Redirect;
use Response;
use Theme;
use Validator;
use View;

//use Neg\Http\Requests\UpdateUserRequest;


/**
 * UserController Class
 *
 * Implements actions regarding user management
 */
class UserController extends NegBaseController
{

    /*
    |--------------------------------------------------------------------------
    | Users Management Methods
    |--------------------------------------------------------------------------
    |
    | Here down are listed methods to manage Users as Admin
    */

    /** @var  UserRepository */
    private $userRepository;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @return Response
     */
    public function index()
    {
        if (Confide::user()->is('admin|super')) {

            $theme = Theme::uses('be')->layout('be');

            $view = array(
                'users' => $this->userRepository->paginate(10)
            );

            return $theme->of('users.manager.index', $view)
                ->render(200);
        } else {
            return Redirect::back();
        }
    }

//    /**
//     * Show the form for creating a new User.
//     *
//     * @return Response
//     */
//    public function managerCreate()
//    {
//        return view('users.manager.create');
//    }
//
//    /**
//     * Store a newly created User in storage.
//     *
//     * @param CreateUserRequest $request
//     *
//     * @return Response
//     */
//    public function managerStore(CreateUserRequest $request)
//    {
//        $input = $request->all();
//
//        $user = $this->userRepository->create($input);
//
//        Flash::success('User. ' . $user->username . ' saved successfully.');
//
//        return redirect(route('users.manager.index'));
//    }
//
//    /**
//     * Display the specified User.
//     *
//     * @param  int $id
//     *
//     * @return Response
//     */
//    public function show($id)
//    {
//        $user = $this->userRepository->find($id);
//
//        if (empty($user)) {
//            Flash::error('User not found');
//
//            return redirect(route('users.manager.index'));
//        }
//
//        return view('users.manager.show')->with('user', $user);
//    }
//
//    /**
//     * Show the form for editing the specified User.
//     *
//     * @param  int $id
//     *
//     * @return Response
//     */
//    public function edit($id)
//    {
//        $user = $this->userRepository->find($id);
//
//        if (empty($user)) {
//            Flash::error('User not found');
//
//            return redirect(route('users.manager.index'));
//        }
//
//        return view('users.manager.edit')->with('user', $user);
//    }
//
//    /**
//     * Update the specified User in storage.
//     *
//     * @param  int $id
//     * @param UpdateUserRequest $request
//     *
//     * @return Response
//     */
//    public function update($id, UpdateUserRequest $request)
//    {
//        $user = $this->userRepository->find($id);
//
//        if (empty($user)) {
//            Flash::error('User not found');
//
//            return redirect(route('users.manager.index'));
//        }
//
//        $user = $this->userRepository->updateRich($request->all(), $id);
//
//        Flash::success('User updated successfully.');
//
//        return redirect(route('users.manager.index'));
//    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.manager.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User ' . $user->username . ' was deleted successfully.');

        return redirect(route('manage.users'));
    }

    /**
     * Change user status.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function changeUserStatus($id)
    {
        $repo = $this->userRepository;
        $user = $repo->changeStatus($id);

        if ($user->confirmed) {
            $toggle = 'activated';
        } else {
            $toggle = 'disabled';
        }

        Flash::success('User ' . $user->username . ' was ' . $toggle . ' successfully!');

        return redirect(route('manage.users'));
    }

    /**
     * Attach a new role to User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function assignNewRoleToUser($userId)
    {
        $roleId = Input::only('role');
        $repo = $this->userRepository;
        $user = $repo->assignRole($userId, $roleId);

        Flash::success('User ' . $user->username . ' was assigned a new role successfully!');

        return redirect(route('manage.users'));
    }

    /**
     * Update the specified User in password.
     *
     * @param  int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function changeUserPassword($id, UpdateUserPasswordRequest $request)
    {
        $input = $request->only('password');
        $repo = $this->userRepository;
        $password = array_get($input, 'password');
        $user = $repo->newPassword($id, $password);

        $username = $user->username;

        $txts = [
            'Password for "',
            '" was changed to "',
            '" (with no quotes) successfully!'
        ];

        $vars = [
            '<b>' . $username . '</b>',
            '<b>' . $password . '</b>'
        ];

        if ($user->isValid()) {

            Flash::success($txts[0] . $vars[0] . $txts[1] . $vars[1] . $txts[2]);

            return redirect(route('manage.users'));
        } else {
            $errors = $user->errors()->all(':message');

            return Redirect::action('UserController@index')
                ->withErrors($errors);
        }

    }

    /*
    |--------------------------------------------------------------------------
    | User Access Methods
    |--------------------------------------------------------------------------
    |
    | Here down are listed Methods to be used as a User
    */

    /**
     * Displays the form for account creation
     *
     * @return  Response
     */
    public function create()
    {
        if (Confide::user()) {
            return redirect(route('userpanel.dashboard'));
        }

//        $theme = Theme::uses('fe')->layout('fe');
//
//        return $theme->of(Config::get('confide.signup_form'))
//            ->render(200);
        return view('users.signup');

    }

    /**
     * Stores new account
     *
     * @return  Response
     */
    public function store(CreateUserRequest $request)
    {
//        $repo = $this->userRepository;
//        $user = $repo->signup(Input::all());
        $input = $request->all();
        $repo = $this->userRepository;
        $user = $repo->signup($input);

        if (!$user->isValid()) {
            $errors = $user->errors()->all(':message');

            return Redirect::action('UserController@create')
                ->withInput(Input::except('password'))
                ->withError($errors);
        } else {


            //Assign "Regular" role to newly registered user
            //and send Email for registration confirmation

            Event::fire(new UserWasRegisteredEvent($user));

            return Redirect::action('UserController@login')
                ->with('notice', Lang::get('confide.alerts.account_created'));
        }

    }

    /**
     * Displays the login form
     *
     * @return  Response
     */
    public function login()
    {
        if (Confide::user()) {
            return redirect(route('userpanel.dashboard'));
        }

//        $theme = Theme::uses('fe')->layout('fe');
//
//        return $theme->of(Config::get('confide.login_form'))
//            ->render(200);
        return view('users.login');
    }

    /**
     * Attempt to do login
     *
     * @return  Response
     */
    public function doLogin()
    {
        $repo = $this->userRepository;
        $input = Input::all();

        if ($this->userRepository->login($input)) {

            //This seed the last_login field with the \DateTime object
            Event::fire(new UserWasLoggedInEvent);

//            return Redirect::intended('userpanel/dashboard');
            return Redirect::intended('userpanel/dashboard');

        } else {
            if ($repo->isThrottled($input)) {
                $err_msg = Lang::get('confide.alerts.too_many_attempts');
            } elseif ($repo->existsButNotConfirmed($input)) {
                $err_msg = Lang::get('confide.alerts.not_confirmed');
            } else {
                $err_msg = Lang::get('confide.alerts.wrong_credentials');
            }

            return Redirect::action('UserController@login')
                ->withInput(Input::except('password'))
                ->with('error', $err_msg);
        }
    }

    /**
     * Attempt to confirm account with code
     *
     * @param  string $code
     *
     * @return  Response
     */
    public function confirm($code)
    {
        if (Confide::confirm($code)) {
            $notice_msg = Lang::get('confide.alerts.confirmation');
            return Redirect::action('UserController@login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide.alerts.wrong_confirmation');
            return Redirect::action('UserController@login')
                ->with('error', $error_msg);
        }
    }

    /**
     * Displays the forgot password form
     *
     * @return  Response
     */
    public function forgotPassword()
    {
        if (Confide::user()) {
            return redirect(route('userpanel.dashboard'));
        }

        $theme = Theme::uses('fe')->layout('fe');

        return $theme->of(Config::get('confide.forgot_password_form'))
            ->render(200);
    }

    /**
     * Attempt to send change password link to the given email
     *
     * @return  Response
     */
    public function doForgotPassword()
    {
        if (Confide::forgotPassword(Input::get('email'))) {
            $notice_msg = Lang::get('confide.alerts.password_forgot');

            return Redirect::action('UserController@login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide.alerts.wrong_password_forgot');

            return Redirect::action('UserController@doForgotPassword')
                ->withInput()
                ->with('error', $error_msg);
        }
    }

    /**
     * Shows the change password form with the given token
     *
     * @param  string $token
     *
     * @return  Response
     */
    public function resetPassword($token)
    {
        if (Confide::user()) {
            return redirect(route('userpanel.dashboard'));
        }
        $view = array(
            'users' => $token
        );

        $theme = Theme::uses('fe')->layout('fe');

        return $theme->of(Config::get('confide.reset_password_form'), $view)
            ->render(200);
    }

    /**
     * Attempt change password of the user
     *
     * @return  Response
     */
    public function doResetPassword()
    {
        $repo = $this->userRepository;
        $input = array(
            'token' => Input::get('token'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation'),
        );

        // By passing an array with the token, password and confirmation
        if ($repo->resetPassword($input)) {
            $notice_msg = Lang::get('confide.alerts.password_reset');
            return Redirect::action('UserController@login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide.alerts.wrong_password_reset');
            return Redirect::action('UserController@resetPassword', array('token' => $input['token']))
                ->withInput()
                ->with('error', $error_msg);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return  Response
     */
    public function logout()
    {
        Confide::logout();

        return Redirect::action('UserController@login');
    }
}
