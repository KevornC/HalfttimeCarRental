<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class ViewVehicleLivewire extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $editMode, $viewMode=false;
    public $vehicleInfo;
    public $name,$model,$rCost,$sCap,$dType,$drType,$quantity,$colour,$image=null;
    public $vId,$oldImage;
    public function cancel(){
        $this->editMode=false;
        $this->viewMode=false;
    }

    public function clearfields(){
        $this->name='';
        $this->model='';
        $this->rCost='';
        $this->sCap='';
        $this->drType='';
        $this->quantity='';
        $this->colour='';
        $this->image='';
    }

    public function editVehicle($id){
        $this->viewMode=true;
        $this->editMode=true;
    //    dd($id);
        $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.2:8080/api/vehicle/edit/get/'.$id; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $vehicleInfo=json_decode($result,true);
        $this->vId=$vehicleInfo['id'];
        $this->name=$vehicleInfo['name'];
        $this->model=$vehicleInfo['model'];
        $this->rCost=$vehicleInfo['rentalCost'];
        $this->sCap=$vehicleInfo['seatingCap'];
        $this->drType=$vehicleInfo['driverType'];
        $this->dType=$vehicleInfo['driverType'];
        $this->quantity=$vehicleInfo['quantity'];
        $this->colour=$vehicleInfo['color'];
        $this->oldImage=$vehicleInfo['image'];

    // dd($this->vehicleInfo]);
    }

    function update(){
        $imageName=$this->oldImage;
        if($this->image!=null){
            $file=$this->image->getClientOriginalName();
            $imageName=$this->name.''.$this->model.''.$file;
            $this->image->storePubliclyAs('carUploads',$imageName,'carImages');
        }
      
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
        $url = 'http://192.168.0.2:8080/api/vehicle/update/'.$this->vId; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        // dd($result);
        $this->editMode=false;
        $this->viewMode=false;
    }

    public function delete($id){
        $ch = curl_init();
        $url = 'http://192.168.0.2:8080/api/vehicle/delete/'.$id;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        // dd($result);
    }

    public function render()
    {
        $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.2:8080/api/vehicle/get'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $vehicles=json_decode($result,true);
        // dd($vehicles);
        return view('livewire.view-vehicle-livewire',compact('vehicles'));
    }

    
}
