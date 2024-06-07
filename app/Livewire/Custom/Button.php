<?php

namespace App\Livewire\Custom;

use Livewire\Component;

class Button extends Component
{
    public string $href, $value, $class; 

    public function mount(string $href, string $value, string $class = "") {
        $this->href = $href;
        $this->value = $value; 
        $this->class = $class; 
    }
    public function render()
    {
        return view('livewire.custom.button');
    }
}
