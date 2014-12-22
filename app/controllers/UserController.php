<?php

class UserController extends \BaseController {

	public function index()
    {
        // get all the users
        $users = User::all();

        // load the view and pass the users
        return View::make('users.index')
            ->with('users', $users);
    }

    public function create()
    {
        // load the create form (app/views/users/create.blade.php)
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
            Session::flash('message', 'Successfully created user!');
            return Redirect::to('users');
        }
    }

    public function show($id)
    {
        // get the user
        $user = User::find($id);

        // show the view and pass the user to it
        return View::make('users.show')
            ->with('user', $user);
    }

    public function edit($id)
    {
        // get the user
        $user = User::find($id);

        // show the edit form and pass the user
        return View::make('users.edit')
            ->with('user', $user);
    }

    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'username'       => 'required',
            'email'      => 'required|email'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = User::find($id);
            $user->username       = Input::get('username');
            $user->email      = Input::get('email');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully updated user!');
            return Redirect::to('users');
        }
    }

    public function destroy($id)
    {
        // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('users');
    }

}
