<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public  $message = 'Apenas um teste';
    private $tweet;



    public function render()
    {
        $tweets =  Tweet::with(['user'])->get();

        return view('livewire.show-tweets',compact('tweets'));
    }
}
