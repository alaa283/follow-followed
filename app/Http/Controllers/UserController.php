<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    function show_all()
    {
        // $users = Auth::user();

        $users = User::all();
        $id = Auth::id();

        // dd($id);

        return view('all_users' , ['data' => $users] , ['ids' => $id]);
    }

    public function user_account($id)
    {
        $data = User::find($id);

        $id_auth = Auth::id();
        // dd($data);
        return view('user_account' , ['data' => $data] , ['id_auth' => $id_auth]);
    }
}
