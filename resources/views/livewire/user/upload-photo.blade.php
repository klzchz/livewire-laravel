<div xmlns="http://www.w3.org/1999/html">
    {{-- The Master doesn't talk, he acts. --}}

    <h1>Atualizar Foto de Perfil</h1>

    <form action="" enctype="multipart/form-data" method="post" wire:submit.prevent="storagePhoto()">
        <input type="file" name="photo" id="photo" wire:model="photo">
        @error('photo')
        {{$message}}
        @enderror
        <br/>
        <button>Upload</button>
    </form>
</div>
