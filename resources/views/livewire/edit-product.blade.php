<div>
    @if (session('success'))
        Prodotto modificato correttamente
    @endif
    <form wire:submit="store">
        <div class="form-floating mb-3">
            <input class="form-control" id="title" value name="title" type="text" wire:model.live="title">
            <label for="name">Titolo</label>
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="quantity" value name="quantity" type="text" wire:model.live="quantity">
            <label for="name">Quantita</label>
            @error('quantity')
                {{ $message }}
            @enderror
        </div>
        <div class="form-floating mb-3">
            <textarea style="height: 10rem" wire:model.live="description" class="form-control" name="description" id=""
                cols="30" rows="10"></textarea>
            <label for="name">descrizione</label>
            @error('description')
                {{ $message }}
            @enderror
        </div>

        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
        </div>
    </form>
</div>
