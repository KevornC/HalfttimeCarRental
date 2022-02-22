<?php

namespace App\Http\Livewire;

use Livewire\Component;

    class OrderLivewire extends Component
    {
        public $viewMode=false;

        public function render()
        {
        $ch = curl_init();
        $url = 'http://192.168.0.2:8080/api/rent/order/view';
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $orderListing=json_decode($result,true); 
    
            return view('livewire.order-livewire',compact('orderListing'));
        }

        public function approve($id){
        $userID=session()->get('admin');
        $ch=curl_init();
        $url='http://192.168.0.2:8080/api/order/approve/'.$id.'/'.$userID;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        if($result==0){
            session()->flash('message','Your order amount exceeds that in stock');
        }
        curl_close($ch);
    }
    public function deny($id){
        $userID=session()->get('admin');
        $ch=curl_init();
        $url='http://192.168.0.2:8080/api/order/deny/'.$id.'/'.$userID;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        curl_close($ch);
    }
}
