<?php

class UserController extends \BaseController {

	public function index()
    {
        // get all the nerds
        $users = User::all();

        // load the view and pass the nerds
        return View::make('users.index')
            ->with('users', $users);
    }

    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('users.create');
    }

    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'username'       => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->username       = Input::get('username');
            $user->email      = Input::get('email');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('users');
        }
    }



}
