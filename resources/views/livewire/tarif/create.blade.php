
    <form>
        <div>
            <label for="exampleFormControlinput1">Tarif description</label>
            <input class="mt-1 w-full" type="text" id="exampleFormControlinput1" wire:model="tar_description" />
            @error('tar_description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlinput2">Tarif ero</label>
            <input class="mt-1 w-full" type="text" id="exampleFormControlinput2" wire:model="tar_ero" />
            @error('tar_ero')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click.prevent="store()" class="mt-4">Save</button>
    </form>

