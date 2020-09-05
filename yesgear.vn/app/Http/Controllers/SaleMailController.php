<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SaleMail;
use Illuminate\Support\Facades\Mail;

class SaleMailController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'salename' => 'required',
            'sale1' => 'required',
            'sale2' => 'required',
            'sale3' => 'required'
        ]);
        $event = $request->all();
        // dd($infor);
        // $emails = $request->post('email');
        
        

        // foreach ($emails as $email) {
        //     'emails'->$email;
        // }
        // dd($emails);
        

        $data = array(
            'salename' => $request->salename,
            'sale1' => $request->sale1,
            'sale2' => $request->sale2,
            'sale3' => $request->sale3
        );
        
        

        Mail::to($event['email'])->send(new SaleMail($data));
        return back()->with('success', 'Đã gửi thành công thông báo khuyến mãi!');
    }
}