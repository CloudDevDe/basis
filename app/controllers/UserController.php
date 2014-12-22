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

}
