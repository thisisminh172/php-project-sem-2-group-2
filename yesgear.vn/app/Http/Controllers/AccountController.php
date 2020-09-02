<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Input;
use App\Http\Controllers\Validator;


class AccountController extends Controller
{

    public function login()
    {
        return view('admin.user.login');
    }
    // public function logout(Request $request)
    // {
    //     $request->session()->invalidate();
    //     return redirect('');
    // }
    public function checkLogin(Request $request)
    {
        $email = $request->email;
        $pwd = $request->password;
        $user = DB::table('users')->where('email', $email)->first();
        print_r($user);
        if ($user != null && $user->password == $pwd) {
            // $name = $user->name;
            $request->session()->put('name', $user->name);

            return redirect('admin');
        } else {
            return redirect('relogin');
        }
    }
    // public function users()
    // {
    //     $user = DB::table('account')->get();
    //     return view('')->with(['users=>$users']);
    // }
    public function displayAddUser()
    {
        return view('admin.user.createUser');
    }

    public function addUser(Request $request)
    {
        // Get the value from the form
        $request->validate([
            'email' => 'bail|required|unique:users',
        ]);

        $email = $request->email;
        $pwd = $request->password;
        $name = $request->name;


        DB::table('users')->insert(['email' => $email, 'password' => $pwd, 'name' => $name]);
        return redirect('admin')->with('message', 'Them moi thanh cong');
    }










































    // public function resetPassword($id)
    // {
    //     DB::table('account')
    //         ->where('accountId', $id)
    //         ->update(['password' => '123']);
    //     return redirect()->action('AccountController@users');
    // }
    // public function details($id)
    // {
    //     $user = DB::table('account')
    //         ->where('accountId', $id)->first();
    //     return view('user/details')->with(['user' => $user]);
    // }
}