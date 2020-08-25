<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactusMailController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'feeback' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'feeback' => $request->feeback,
            'email' => $request->email,
            'phone' => $request->phone
        );

        Mail::to('yesgearvn@gmail.com')->send(new contactUsMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
