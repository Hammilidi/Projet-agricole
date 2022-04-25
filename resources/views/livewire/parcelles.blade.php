
    
            @if ($isOpen)
                @include('livewire.parcelle.update')
            @else
                @include('livewire.parcelle.create')
            @endif
       
        
                    <table class="table table-bordered mt-5" >
                        <thead>
                            <tr class="whitespace-nowrap">
                                <th>Par id</th>
                                <th>Parcelle lieu</th>
                                <th>Parcelle nom</th>
                                <th>Parcelle superficie</th>
                                <th>Parcelle prop</th>
                               
                                    <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($parcelle as $value)
                                <tr class="whitespace-nowrap">
                                    <td >{{ $value->par_id }}</td>
                                    <td >{{ $value->emp_lieu }}
                                    </td>
                                    <td >{{ $value->par_nom }}</td>
                                    <td >
                                        {{ $value->par_superficie }}</td>
                                    <td >{{ $value->par_prop }}
                                    </td>
                                    
                                        <td >
                                            <button wire:click="edit({{ $value->par_id }})"  class="btn btn-primary btn-sm">Edit</button>
                                            
                                                <button wire:click="delete({{ $value->par_id }})" class="btn btn-danger btn-sm">Delete</button>
                                            
                                        </td>
                                    

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
         
    
</div>
