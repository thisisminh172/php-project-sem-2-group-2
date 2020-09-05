<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Comment;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.user.show')->with(['users' => $users]);
    }
    public function delete($u)
    {
        DB::table('users')->where('id', intval($u))->delete();
        return redirect()->action('AdminUserController@index');
    }

    public function update($id)
    {
        $u = DB::table('users')->where('id', intval($id))->first();
        return view('admin.user.update', ['u' => $u]);
    }
    public function postUpdate(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $password = $request->input('password');
        $u = DB::table('users')->where('id', intval($id))->update(['name' => $name, 'email' => $email, 'address' => $address, 'password' => $password]);
        return redirect()->action('AdminUserController@index');
    }
}