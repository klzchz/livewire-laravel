<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;
    public  $content = 'Apenas um teste';
    //Validação Livewire
    protected  $rules = [
        'content'=>'required|min:3|max:255'
    ];
    public function render()
    {
        $tweets =  Tweet::with(['user'])->paginate(2);

        return view('livewire.show-tweets',compact('tweets'));
    }
    public function create()
    {
        //Validação Livewire
        $this->validate();

        $data = [
            'content'=>$this->content,
            'user_id'=>rand(1,10)
        ];
        Tweet::create($data);
        return response()->json('created Succesfully',201);
    }

}
