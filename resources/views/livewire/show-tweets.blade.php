<div>
    {{-- The Master doesn't talk, he acts. --}}
        <h3>Show Tweets</h3>
    <p>{{$content}}</p>
    <form action="" method="post" wire:submit.prevent="create()">
        @csrf
    <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            {{$message}}
        @enderror
    <button type="submit">Criar Tweet</button>
    </form>
    <hr>
    @foreach($tweets as $tweet)
            {{$tweet->user->name}} - {{$tweet->content}} <br/>
    @endforeach

</div>
