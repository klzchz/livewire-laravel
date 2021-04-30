<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    protected $message = 'Apenas um teste';
    public function render()
    {
        $message = $this->message;
        return view('livewire.show-tweets',compact('message'));
    }
}
