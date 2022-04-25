{{-- @include('layouts.navigation') --}}
<div>
    
    <div class="container mx-auto">
       
            @if ($isOpen)
                @include('livewire.employe.update')
            @else
                @include('livewire.employe.create')
            @endif

                    <table class="table table-bordered mt-5" >
                        <thead>
                            <tr>
                                <th>Emp_nss</th>
                                <th>Emp_nom</th>
                                <th>Emp_prn</th>
                                <th>Emp_tarif</th>
                               
                                    <th>Action</th>
                             
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($employe as $value)
                                <tr class="whitespace-nowrap">
                                    <td>{{ $value->emp_nss }}</td>
                                    <td>{{ $value->emp_nom }}</td>
                                    <td>{{ $value->emp_prn }}</td>
                                    <td>{{ $value->emp_tarif }}
                                    </td>
                                  
                                        <td>
                                            <button wire:click="edit({{ json_encode($value->emp_nss) }})"  class="btn btn-primary btn-sm">Edit
                                            </button>
                                            
                                                <button wire:click="delete({{ json_encode($value->emp_nss) }})" class="btn btn-danger btn-sm" >Delete</button>
                                           
                                        </td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            

  
</div>
