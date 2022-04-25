
   
    <form>
        <div class="form-group">
            <label  for="exampleFormControlInput1">Agriculteur nom</label >
            <input class="mt-1 w-full" type="text" id="exampleFormControlInput1" wire:model="agr_nom" />
            @error('agr_nom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label  for="exampleFormControlInput2">Agriculteur prenom </label >
            <input class="mt-1 w-full" type="text" id="exampleFormControlInput2" wire:model="agr_prn" />
            @error('agr_prn')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label  for="exampleFormControlInput3">Agriculteur Residance</label >
            <input class="mt-1 w-full" type="text" id="exampleFormControlInput3" wire:model="agr_resid" />
            @error('agr_resid')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click.prevent="store()" class="mt-4">Save</button>
    </form>

