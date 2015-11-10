<?php
class SessionsController extends BaseController {

	/**
	 * Show login form to user
	 *
	 * @return View
	 */
	public function login()
	{
		return View::make('sessions.login');
	}

	/**
	 * Log in user in system
	 *
	 * @return View
	 */
	public function store()
	{
        $input = Input::all();

		$attempt = Auth::attempt( array('email' => $input['email'], 'password' => $input['password']) );

		if($attempt) {
			return Redirect::to('admin/contacts');
		} else {
			return Redirect::to('login')
                                ->withInput()->withErrors('Username or password is wrong.');
		}
	}

	/**
	 * Logout and destroying session
	 *
	 * @return View
	 */
	public function destroy()
	{
        Auth::logout();
		Session::flush();
		return Redirect::to('login', array('You are now logged out.'));
	}

	/**
	 * Show register form to user
	 *
	 * @return View
	 */
    public function register()
    {
        return View::make('sessions.register');
    }

	/**
	 * Register a user in system
	 *
	 * @return Type
	 */
    public function save()
    {
        $input = Input::all();

        $data_user = array(
            'username'  => $input['username'],
            'password'  => Hash::make($input['password']),
            'email'     => $input['email'],
            'real_name' => $input['real_name'],
            'status'    => 1,
            'role'      => 1,
        );

        $new_user = User::create($data_user);
        if($new_user){
            return Redirect::to('login');
        }else{
            return "Bad =(";
        }
    }

	/**
	 * Show reset password to user
	 *
	 * @return View
	 */
	public function repassword()
	{
		return View::make('sessions.repassword');

	}

	/**
	 * Restore user's password in system
	 *
	 * @return Type
	 */
	public function resetPassword()
	{
		$input == Input::all();
		echo "<pre>";
		var_dump($input);
		echo "</pre>";
		die;

	}


}
