
    <form>
        <div>
            <label for="exampleFormControlInput1">Parcelle lieu</label>
            <input class="mt-1 w-full" type="text" id="exampleFormControlInput1" wire:model="emp_lieu" />
            @error('emp_lieu')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlInput2">Parcelle nom </label>
            <input class="mt-1 w-full" type="text" id="exampleFormControlInput2" wire:model="par_nom" />
            @error('par_nom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlInput3">Parcelle superficie</label>
            <input class="mt-1 w-full" type="text" id="exampleFormControlInput3" wire:model="par_superficie" />
            @error('par_superficie')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="tarif" class="block mt-3 mb-1 font-medium text-sm text-gray-700">Parcelle prop</label>
            <select name="tarif" id="tarif" style="width: 100%;" wire:model="par_prop"required>
                <option value=""> </option>
                @foreach ($agr as $value)
                    <option value={{ $value->agr_id }}>{{ $value->agr_id }}</option>
                @endforeach
            </select>
            @error('par_prop')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <x-button wire:click.prevent="update()" class="mt-4">Update</x-button>
        <x-button wire:click.prevent="cancel()" class="mt-4 text-sm text-gray bg-red-400 rounded">Cancel</x-button>
    </form>
</x-auth-card>
