
    <form>
        <div>
            <label for="exampleFormControlinput2">Tarif ero</label>
            <input class="mt-1 w-full" type="text" id="exampleFormControlinput2" wire:model="tar_ero" />
            @error('tar_ero')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button wire:click.prevent="update()" class="mt-4">Update</button>
        <button wire:click.prevent="cancel()" class="mt-4 text-sm text-gray bg-red-400 rounded">Cancel</button>
    </form>

