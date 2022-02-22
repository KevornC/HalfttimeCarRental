<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MemberLivewire extends Component
{
    public $viewMode=false;
    public function render()
    {
        $ch = curl_init();
        $url = '192.168.0.2:8080/api/member/get';
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $memberInfo=json_decode($result,true);
        // dd($memberInfo);
        return view('livewire.member-livewire',compact('memberInfo'));
    }
}
