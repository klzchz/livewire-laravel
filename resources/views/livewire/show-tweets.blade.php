<div>
    {{-- The Master doesn't talk, he acts. --}}
        <h3>Show Tweets</h3>
    <p>{{$message}}</p>
    <form action="" method="post" wire:submit.prevent="create()">
        @csrf
    <input type="text" name="message" id="message" wire:model="message">
    <button type="submit">Criar Tweet</button>
    </form>
    <hr>
    @foreach($tweets as $tweet)
            {{$tweet->user->name}} - {{$tweet->content}} <br/>
    @endforeach

</div>
