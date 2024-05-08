<div>
    <h3 class="mt-5 mb-3">Ada yang ingin didiskusikan?</h3>
    <div class="input-group mb-3">
        <input wire:model="newComment" type="text" class="form-control" placeholder="Masukkan Komentar" aria-label="Masukkan Komentar"
            aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" wire:click="addComment">Kirim</button>
    </div>

    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->body }}</li>
        @endforeach
    </ul>

    
</div>
