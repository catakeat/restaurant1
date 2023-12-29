<?php

namespace App\Livewire;

use Livewire\Component;

class Citate extends Component
{
    public $citat;
    public  $citate=[];

    public function mount()
    {
        $this->citat = "Scrie ceva";
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
