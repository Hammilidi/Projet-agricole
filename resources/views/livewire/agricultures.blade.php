
<div>
    
    <div class="container mx-auto">
       
            @if ($isOpen)
                @include('livewire.agriculteur.update')
            @else
                @include('livewire.agriculteur.create')
            @endif
        
     
                    <table class="table table-bordered mt-5" >
                        <thead>
                            <tr >
                                <th>Agr_id</th>
                                <th>Agr_nom</th>
                                <th>Agr_prenom</th>
                                <th>Agr_resid</th>
                               
                                    <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($agriculteur as $value)
                                <tr>
                                    <td>{{ $value->agr_id }}</td>
                                    <td>{{ $value->agr_nom }}</td>
                                    <td>{{ $value->agr_prn }}</td>
                                    <td>{{ $value->agr_resid }}
                                    </td>
                                   
                                        <td>
                                            <button wire:click="edit({{ $value->agr_id }})"  class="btn btn-primary btn-sm">Edit</button>
                                           
                                                <button wire:click="delete({{ $value->agr_id }})" class="btn btn-danger btn-sm">Delete</button>
                                           
                                        </td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        

    
</div>
