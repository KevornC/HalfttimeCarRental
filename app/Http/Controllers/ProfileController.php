<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $mID=session()->get('member');
        $ch = curl_init();
        $url = 'http://192.168.0.2:8080/api/member/profile/'.$mID; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $profileInfo=json_decode($result,true);
        return view('memberDashboard.profile',compact('profileInfo'));
    }
    public function profileEdit(){
        $mID=session()->get('member');
        $ch = curl_init();
        $url = 'http://192.168.0.2:8080/api/member/profile/'.$mID; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $profileInfo=json_decode($result,true);
        $profileInfo=array([
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
        return view('memberDashboard.profileEdit',compact('profileInfo'));
    }
    
    public function profileUpdate(Request $request){
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

        $mID=session()->get('member');

        $data=http_build_query($info);

        $ch=curl_init();
        $url='http://192.168.0.2:8080/api/member/profile/update/'.$mID;

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $result=curl_exec($ch);
        curl_close($ch);

        return redirect()->route('profile');


        
    }
}
