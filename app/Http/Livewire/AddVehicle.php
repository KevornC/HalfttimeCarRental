<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

use Livewire\WithFileUploads;

class AddVehicle extends ModalComponent
{
    use WithFileUploads;
    
    public $name,$model,$rCost,$sCap,$dType,$quantity,$colour,$image;
  

    

    protected $rules= [ 
        'name'=>'required',
        'model'=>'required',
        'rCost'=>'required',
        'sCap'=>'required',
        'dType'=>'required',
        'quantity'=>'required',
        'colour'=>'required',
        'image'=>'required'
    ];

    protected $messages = [
        'rCost.required'=>'Rental Cost is required.',
        'sCap.required' => 'Seating Capacity is required.',
        'dType.required' => 'Driver Type is required',
    ];
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function addvehicle(){
        $vehicle=$this->validate();
        $file=$this->image->getClientOriginalName();
        $imageName=$this->name.''.$this->model.''.$file;
        $this->image->storePubliclyAs('carUploads',$imageName,'carImages');
        $vehicleData=array(
            'image' => $imageName,
            'name' => $this->name,
            'model' => $this->model,
            'rentalCost' => $this->rCost,
            'quantity' => $this->quantity,
            'color' => $this->colour,
            'seatingCap' => $this->sCap,
            'driverType' => $this->dType
        );
        
        // dd($vehicleData);
        $data = http_build_query($vehicleData);
        $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.12:8080/api/vehicle/add'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.add-vehicle');
    }
}
