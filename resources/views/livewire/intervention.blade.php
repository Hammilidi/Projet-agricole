
<div>

    
        
            @if ($isOpen)
                @include('livewire.intervention.update')
            @else
                @include('livewire.intervention.create')
            @endif
       
  
                    <table class="table table-bordered mt-5" >
                        <thead>
                            <tr class="whitespace-nowrap">
                                <th>Int debut</th>
                                <th>Int emp nss</th>
                                <th>Int par id</th>
                                <th>Int nb jrs</th>
                                
                                    <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($intervention as $value)
                                <tr>

                                    <td >{{ $value->int_debut }}
                                    </td>

                                    <td >{{ $value->int_emp_nss }}
                                    </td>

                                    <td >{{ $value->int_par_id }}
                                    </td>

                                    <td >{{ $value->int_nb_jrs }}
                                    </td>
                                  
                                        <td >
                                           
                                            <button wire:click="edit({{ json_encode($value->int_debut) }})"  class="btn btn-primary btn-sm">Edit
                                            </button>
                                           
                                                <button wire:click="delete({{ json_encode($value->int_debut) }})" class="btn btn-danger btn-sm">Delete</button>
                                            
                                        </td>
                                    

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               
    

    
</div>
