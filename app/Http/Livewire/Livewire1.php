<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Livewire1 extends Component
{
    public $name ='Erkan';
    public $name1 ='Erkan';
    public $loud = false;
    public $greeting = 'Hello';

    public function resetName($name = 'Erkan')
    {
        $this->name = $name;
    }


    public function mount($name1)
    {
        $this->name ='Hasan';
    }







    public function render()
    {

        return view('livewire.livewire1');

    }
}
