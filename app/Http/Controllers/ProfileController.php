<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $mID=session()->get('member');
        // dd($mID);
        $ch = curl_init();
        $url = 'http://192.168.0.12:8080/api/user/dashboard/profile/'.$mID; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $profileInfo=json_decode($result,true);
        // dd($profileInfo);
        return view('userDashboard.profile',compact('profileInfo'));
    }
    public function profileEdit(){
        $mID=session()->get('member');
        // dd($mID);
        $ch = curl_init();
        $url = 'http://192.168.0.12:8080/api/user/dashboard/profile/'.$mID; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $profileInfo=json_decode($result,true);
        // dd($profileInfo);
        $info=array([
            'photo'=>$profileInfo['photo'],
            'fname'=>$profileInfo['fname'],
            'lname'=>$profileInfo['lname'],
            'tel'=>$profileInfo['phone'],
            'email'=>$profileInfo['email'],
            'add'=>$profileInfo['address'],
            'trn'=>$profileInfo['trn'],
            'coun'=>$profileInfo['country'],
            'gender'=>$profileInfo['gender'],
        ]);
        // dd($info);
        return view('userDashboard.profileEdit',compact('info'));
    }
    
    public function profileUpdate(Request $request){
        
        // $this->validate($request,[
            //     'firstname' => 'required',
            //     'lastname'=>'required',
            //     'tel'=>'required',
            //     'email'=>'required',
            //     'address'=>'required',
            //     'trn'=>'required',
            //     'country'=>'required'
            // ],[
                //     'tel.required'=>'Telephone is required'
                // ]);
                // dd($request->fname);
                $info=array(
                    'photo'=>$request->photo,
                    'fname'=>$request->fname,
                    'lname'=>$request->lname,
                    'gender'=>$request->gender,
                    'tel'=>$request->tel,
                    'email'=>$request->email,
                    'add'=>$request->address,
                    'trn'=>$request->trn,
                    'coun'=>$request->coun,
        );
        // dd($info);

        $mID=session()->get('member');

        $data=http_build_query($info);

        $ch=curl_init();
        $url='http://192.168.0.12:8080/api/user/dashboard/profile/update/'.$mID;

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $result=curl_exec($ch);
        // dd($result);
        curl_close($ch);

        return redirect()->route('profile');


        
    }
}
