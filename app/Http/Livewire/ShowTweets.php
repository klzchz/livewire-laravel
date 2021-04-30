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

    public function create()
    {
        $data = [
            'content'=>$this->message,
            'user_id'=>rand(1,10)
        ];
        Tweet::create($data);
        return response()->json('created succesfully',201);
    }

}
