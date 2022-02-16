<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function contact(){
        return view('contactus');
    }
    public function about(){
        return view('aboutus');
    }
    public function homepage(){

        $ch=curl_init();
        $url = '192.168.0.12:8080/api/homepage/vehicles';

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $homepagevehicles=curl_exec($ch);
        $homepagevehicles=json_decode($homepagevehicles,true);

        // dd($homepagevehicles);
        return view('homepage',compact('homepagevehicles'));
    }
    
    // userHome
    public function userDashboard(){
        $mID=session()->get('member');
        $ch = curl_init();
        $url = '192.168.0.12:8080/api/member/rent/order/view/'.$mID;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $rental=json_decode($result,true);
        // dd($rental);
        curl_close($ch);
        return view('userDashboard.userDashboard',compact('rental'));
    }
    
    // userAdmin
    public function adminDashboard(){
        $ch = curl_init();
        $url = '192.168.0.12:8080/api/stats';
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $stats=json_decode($result,true);
        // dd($stats);
        return view('adminDashboard.adminDashboard',compact('stats'));
    }

    public function homeSearch(Request $request){
        $search =array(
            'sQuery'=>$request->searchQuery
        );
        
        $data = http_build_query($search);

        $ch = curl_init();
        $url = 'http://192.168.0.12:8080/api/home/search'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $searchResult=curl_exec($ch);
        // dd($searchResult);
        $searchResult=json_decode($searchResult,true);

        return view('homepageSResult',compact('searchResult'));
      
    }
}
