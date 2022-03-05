<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class UserLoginController extends Controller
{
    /**
     * @return view
     */
    public function show()
    {
        return view("userLogin");
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  checkLogin(UserRequest $request)
    {
        $input = $request->all();
        return view("userLogin");
    }

    public function register(Request $request)
    {

    }
}
