<?php

namespace App\Http\Controllers;

use App\Models\Folow_User;
use Illuminate\Http\Request;

class Follow_UserController extends Controller
{
    public function follow()
    {
        $folow_user = new Folow_User;
        $folow_user->followers = request('followers');
        $folow_user->following = request('following');
        $folow_user->save();

        return redirect()->route('dashboard');
    }
}