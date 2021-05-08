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
     <div class="flex">
         <div class="w-2/8">
             @if($tweet->user->photo)
                 <img src="{{url('storage/'.$tweet->user->photo)}}" alt="" class="rounded-full h-8 w-8"/>
             @else
                 <img src="{{url('img/no-image.png')}}" alt="" class="rounded-full h-8 w-8"/>
             @endif
         </div>
         <div class="w-6/8">
             <p>{{$tweet->user->name}} - {{$tweet->content}}
                 @if($tweet->likes->count())
                     <a href=""  class="" wire:click.prevent="unlike({{$tweet}})">Descurtir</a>
                 @else
                     <a href="" wire:click.prevent="like({{$tweet->id}})" class="">Curtir</a>
                 @endif
             </p>
         </div>
     </div>
    @endforeach
    <hr>
    {{$tweets->links()}}

</div>
