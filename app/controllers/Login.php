<?php

class Login extends BaseController
{
    public function postUser()
    {
        //Getting post data
        $user_data = array(
            'email' => Input::get('email'),
            'password' => Input::get('pass')
        );

        if(Auth::attempt($user_data))
        {
            //we are logged in, go to admin
            return "Usuario loggeado correctamente.";
        }else{
            return "Error de autenticación.";
        }
    }
}
