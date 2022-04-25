
    <div class="container mx-auto">
       
            @if ($isOpen)
                @include('livewire.tarif.update')
            @else
                @include('livewire.tarif.create')
            @endif
        
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-4 border-b border-gray-200 shadow flex justify-center">
                    <table class="p-4" id="sampleTable">
                        <thead>
                            <tr class="whitespace-nowrap">
                                <th class="p-8 text-xs text-gray-500">Tarif description</th>
                                <th class="p-8 text-xs text-gray-500">Tarif ero</th>
                               
                                    <th class="p-8 text-xs text-gray-500">Action</th>
                               
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($tarif as $value)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{ $value->tar_description }}</td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">{{ $value->tar_ero }}</td>
                                   
                                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        
                                            <button wire:click="edit({{ json_encode($value->tar_description) }})"  class="btn btn-primary btn-sm">
                                                Edit</button>
                                           
                                                <button
                                                    wire:click="delete({{ json_encode($value->tar_description) }})" class="btn btn-danger btn-sm">Delete</button>
                                           
                                        </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
