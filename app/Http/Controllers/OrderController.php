<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // public function userDashboardFVD($id){
    //     $ch = curl_init();
    //     $url = '192.168.0.12:8080/api/vehicle/featured/get/'.$id;
    //     curl_setopt($ch,CURLOPT_URL,$url);
    //     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    //     $result=curl_exec($ch);
    //     $featured=$result;
    //     // dd($result);
    //     return view('userDashboard.FeaturedVehicleDetails',compact('featured'));
    // }
    
    public function rentFilterSearch(){   
       return view('livewireBlade.LiveRentalSearch');
   }
   public function vehicleDetail($id){
    $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
    $url = 'http://192.168.0.12:8080/api/vehicle/rent/filter/view/'.$id; //url section
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    $vDetails=json_decode($result,true);
    // dd($vDetails);
       return view('userDashboard.vehicleDetails',compact('vDetails'));
   }

   public function vehicleRent(Request $request){
    // $a=session()->get('member'); 
    // dd($a);
    $validated = $request->validate([
        'start' => 'required|after:yesterday',
        'end' => 'required|after:yesterday',
        'quantity' => 'required',
    ]);

    $rentInfo=array(
        'userID'=>session()->get('member'),
        'start'=>$request->start,
        'end'=>$request->end,
        'quantity'=>$request->quantity
    );

    $data = http_build_query($rentInfo);
    $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
    $url = 'http://192.168.0.12:8080/api/vehicle/rent/'.$request->vId; //url section
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);

    
    return view('userDashboard.applySuccess');

   }

   public function rentHistory(){
       return view('userDashboard.rentHistory');
   }

   public function viewOL(){
    return view('adminDashboard.Order');
}
}
