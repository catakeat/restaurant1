<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\Citat;

class Citate extends Component
{
    public $citat;
    public  $citate=[];

    public function mount($citat)
    {
     $this->citat = $citat;
       // $this->citate[]=array();
    }

    public function render()
    {
        return view('livewire.citate');
    }
    function adaugaCitat(){
        $this->citate[]=$this->citat;
       //dd($this->citate);
    }
}
