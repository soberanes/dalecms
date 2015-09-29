<?php
class SessionsController extends BaseController {

	public function login()
	{
		return View::make('sessions.login');
	}

	public function store()
	{
        $input = Input::all();

		$attempt = Auth::attempt( array('email' => $input['email'], 'password' => $input['password']) );

		if($attempt) {
			return Redirect::to('admin/contacts');
		} else {
			return Redirect::to('login');
		}
	}

	public function destroy()
	{
        Auth::logout();
		Session::flush();
		return Redirect::to('login');
	}

    public function register()
    {
        /*
        $user = array(
            'username'  => 'paul',
            'password'  => Hash::make('sopa10'),
            'email'     => 'paul@lightcone.com',
            'real_name' => 'Paul Lightcone',
            'status'    => 1,
            'role'      => 1,
        );

        $newUser = User::create($user);
        var_dump($newUser);
        die;
        */
        return View::make('sessions.register');
    }

    public function save()
    {
        return "ok";
    }
}
