<?php

namespace App\Http\Livewire;

use Livewire\Component;

    class OrderLivewire extends Component
    {
        public $viewMode=false;

        public function render()
        {
        $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.12:8080/api/rent/order/view'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $orderListing=json_decode($result,true);
        // dd($orderListing); 
    
            return view('livewire.order-livewire',compact('orderListing'));
        }

        public function approve($id){
            // dd($id);
        $userID=session()->get('admin');
        $ch=curl_init();
        $url='http://192.168.0.12:8080/api/order/approve/'.$id.'/'.$userID;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        if($result==0){
            session()->flash('message','Order amount is greater than amount in inventory');
        }
        curl_close($ch);
    }
    public function deny($id){
        // dd($id);
        $userID=session()->get('admin');
        $ch=curl_init();
        $url='http://192.168.0.12:8080/api/order/deny/'.$id.'/'.$userID;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        curl_close($ch);
    }
}
