
    <form>
        <div>
            <label for="exampleFormControlInput1">Employe nom</label>
            <input type="text"  id="exampleFormControlInput1" wire:model="emp_nom" />
            @error('emp_nom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlInput2">Employe prenom </label>
            <input type="text"  id="exampleFormControlInput2" wire:model="emp_prn" />
            @error('emp_prn')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="tarif" class="block mt-3 mb-1 font-medium text-sm text-gray-700">Employe Tarif</label>
            <select name="tarif" id="tarif" style="width: 100%;" wire:model="emp_tarif"required>
                <option value=""> </option>
                @foreach ($tarif as $value)
                    <option value={{ $value->tar_description }}>{{ $value->tar_description }}</option>
                @endforeach


            </select>
            @error('emp_tarif')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click.prevent="update()" class="mt-4">Update</button>
        <button wire:click.prevent="cancel()" class="mt-4 text-sm text-gray bg-red-400 rounded">Cancel</button>
    </form>

