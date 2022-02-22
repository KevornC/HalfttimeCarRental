<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveRentSearch extends Component
{
    public $rentSearchMode=false;

    public $mod, $seat, $dType, $colour;
    public $searchResults;
    
   
   public function searchFilter(){
    // dd($this->searchResults);
        $data=array(
            'model'=>$this->mod,
            'seatingCap'=>$this->seat,
            'driverType'=>$this->dType,
            'color'=>$this->colour
        );
        $data = http_build_query($data);

        $ch = curl_init();
        $url = 'http://192.168.0.2:8080/api/vehicle/rent/options/'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        // dd($result);
        $this->searchResults=json_decode($result,true);
        // $vehicle=vehicle::query();

        // if(!empty($this->mod)){
        //     $vehicle = $vehicle->where('mod','like','%'.$this->mod.'%');
        // }
        // $this->searchResults = $searchResults->get();
   }

   public function vehichDetails($id){
// dd($id);
        return redirect()->route('vehicleDetails',compact('id'));
   }

   public function mount(){

        $ch = curl_init();  //ch mean Curl handler .. here we initialize Curl
        $url = 'http://192.168.0.2:8080/api/vehicle/rent/filter/'; //url section
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        $this->searchResults=json_decode($result,true);
        // dd($this->searchResults);
   }

    public function render()
    {
        return view('livewire.live-rent-search');
    }
}
