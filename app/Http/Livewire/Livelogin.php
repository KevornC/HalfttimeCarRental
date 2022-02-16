<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Hash;

class Livelogin extends Component
{
    public $email, $password;

    protected $rules=[
        'email'=> 'required',
        'password'=> 'required'
    ];

     protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'password.required' => 'The Password cannot be empty.',
    ];
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function submit(){
        $data=$this->validate();
        // dd($data);
        $data=http_build_query($data);
        $ch = curl_init(); //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.12:8080/api/login/member'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        // dd($result);
        $login=json_decode($result,true);
        if($login!=202){
            session()->put('member',$login);
            return redirect()->route('userDashboard');
        }elseif($login==202){
            // return redirect()->route('showLogin');
          return redirect()->route('showLogin');
           

        } 
    }

    function resetInputFields(){ 

        $this->email = ''; 
        $this->password = ''; 
    } 

    public function render()
    {
        return view('livewire.livelogin');
    }


}
