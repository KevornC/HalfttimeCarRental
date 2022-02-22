<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Livewire\WithFileUploads;
use Hash;
class LiveSignup extends ModalComponent
{
    public $firs, $last, $gender, $phon, $emai, $pass, $rpas, $addr, $coun, $trn, $phot, $conf;
    use WithFileUploads;

    protected $rules=[
        'firs'=> 'required',
        'last'=> 'required',
        'phon'=> 'required',
        'gender'=> 'required',
        'emai'=> 'required|email',
        'pass'=> 'required',
        'rpas'=> 'required_with:pass|same:pass|min:8',
        'addr'=> 'required',
        'coun'=> 'required',
        'trn'=> 'required|min:1|max:11',
        'phot'=> 'required|mimes:png,jpg,jpeg|max:10240',
        'conf'=> 'required'
    ];

     protected $messages = [
        'emai.required' => 'This field is required.',
        'gender.required' => 'This field is required.',
        'emai.email' => 'Invalid email address.',
        'pass.required' => 'This field is required.',
        'rpas.required' => 'Please retype Password.',
        'rpas.min' => 'Minimum password is 8 characters.',
        'conf.required' => 'Please read conditions above and tick box to proceed with form submission.',
        'firs.required' => 'This field is required',
        'last.required' => 'This field is required',
        'phon.required' => 'This field is required',
        'addr.required' => 'This field is required',
        'coun.required' => 'Please select country',
        'trn.required' => 'This field is required',
        'phot.required' => 'Please upload jpeg, png or jpg'
    ];
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function submit(){
      $validate=$this->validate();
      
      $file=$this->phot->getClientOriginalName();
      $licenseImage=$this->firs.''.$this->last.''.$file;
      $this->phot->storePubliclyAs('docUploads',$licenseImage,'carImages');
      
      
      
      $memberSI = array(
        'firstnm' =>  $this->firs,
        'lastnm' =>  $this->last,
        'gender' =>  $this->gender,
        'tel' =>  $this->phon,
        'email' =>  $this->emai,
        'pass' =>  hash::make($this->pass),
        'addr' =>  $this->addr,
        'coun' =>  $this->coun,
        'trn' =>  $this->trn,
        'phot' =>  $licenseImage,
      );
      // dd($memberSI);
        $data = http_build_query($memberSI);
        $ch = curl_init();
        $url = 'http://192.168.0.2:8080/api/signup/member';
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        // dd($result);
        curl_close($ch);

        return redirect()->route('showLogin');
    }


    public function render()
    {
        return view('livewire.live-signup');
    }
}
