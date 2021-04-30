<div>
    {{-- The Master doesn't talk, he acts. --}}
        <h3>Show Tweets</h3>
    <p>{{$message}}</p>

    <input type="text" name="message" id="message" wire:model="message">
    <hr>
    @foreach($tweets as $tweet)
            {{$tweet->user->name}} - {{$tweet->content}} <br/>
    @endforeach

</div>
