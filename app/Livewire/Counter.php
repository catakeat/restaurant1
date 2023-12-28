<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;


    public function render()
    {
        return view('livewire.counter');
    }

    public function mount(){
        $this->count=0;
    }
    function increment(){
    $this->count++;
    }
    function decrement(){
   $this->count--;
    }
}
