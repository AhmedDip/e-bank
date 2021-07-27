<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userList()
    {
        return view('user.userList');
    }


    public function changePass()
    {
        return view('user.changePassword');
    }

    public function deleteUser()
    {
        return view('user.deleteUser');
    }

    public function editProfile()
    {
        return view('user.editProfile');
    }

    public function changePassword()
    {
        return view('user.changePassword');
    }



    public function pendingUser()
    {
        return view('user.pendingUser');
    }


    public function profile()
    {
        return view('user.profile');
    }

 
}
