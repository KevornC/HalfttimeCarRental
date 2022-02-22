<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function viewVL(){
        $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.2:8080/api/vehicle/get'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $vehicles=json_decode($result,true);
        // dd($vehicles);
        return view('adminDashboard.viewVehicle',compact('vehicles'));
    }

   
}
