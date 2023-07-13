<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $message;

    public function mount()
    {
        $this->message = 'Hello World!';
    }

    public function render()
    {
        return view('livewire.home')
                ->layout('layouts.apps');
    }
}
