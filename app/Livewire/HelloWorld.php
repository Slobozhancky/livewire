<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public $title = 'Illia';
    public $loud = false;
    public $greetings = "Hello";

    public function render()
    {
        return view('livewire.hello-world');
    }
}
