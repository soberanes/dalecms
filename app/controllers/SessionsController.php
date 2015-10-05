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
			return Redirect::to('login')
                                ->withInput()->withErrors('Username or password is wrong.');
		}
	}

	public function destroy()
	{
        Auth::logout();
		Session::flush();
		return Redirect::to('login', array('You are now logged out.'));
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
}
