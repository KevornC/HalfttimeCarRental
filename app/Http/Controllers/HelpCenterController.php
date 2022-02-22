<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    public function helpCenter(){
        return view('memberDashboard.helpCenter');
    }
    public function postHelpCenter(Request $request){
        $request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'message'=>'required',
            'contact'=>'required'
        ]);

        $data=array(
            'name'=>$request->fullname,
            'email'=>$request->email,
            'phone'=>$request->contact,
            'msg'=>$request->message
        );

        $data=http_build_query($data);
        // dd($data);
        $ch=curl_init();
        $url='http://192.168.0.2:8080/api/contact';
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        // dd($result);
        $result=json_decode($result,true);

        return redirect()->back()->with('success','Email sent successfully');
        // return view('memberDashboard.helpCenter');
    }
}
