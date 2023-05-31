
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>


                <h1 class="p-1 fw-medium text-dark text-center">Affaires pour {{ $client->name }} {{ $client->lastName }} :</h1>


<table class="table w-full">
    <thead class="bg-gray-900 text-white">
        
            <tr>
                <th>###</th>
                <th>Nom D'affaire</th>
                <th>Description</th>
                <th>priorité</th>
                <th>Status</th>
                <th>Date du Creation</th>
                <th>Action</th>
                <th>etapes</th>

            </tr>
        </thead>
        <tbody class="hhh">
            @if ($cases)
            @foreach ($cases as $case)
            <tr class="table-row" data-url="{{ route('affaires.edit', $case->id) }}">
                <td>{{ $case->id }}</td>
                <td>{{ $case->Name }}</td>
                <td class="truncate" style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $case->Description }}</td>

                {{-- <td class="truncate case-description" style="max-width: 200px;">{{ $case->Description }}</td> --}}
                <td>{{ $case->priorité }}</td>
                @if ($case->status === 'In Progress')
                <td class="text-warning">{{ $case->status }}</td>
                @else
                <td class="text-success">{{ $case->status }}</td>
                @endif
                <td>{{ $case->created_at }}</td>
                <td >
                    <div class="row">
                        {{-- <form action="{{ route('affaires.destroy', $case->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark"><i class="fas fa-trash-alt"></i></button>
                        </form>  --}}
                <div class="col">
                        <a href="{{ route('affaires.edit', $case->id) }}" class=" btn btn-dark"><i class="fa fa-pencil-square-o bg-white-300 text-white"></i></a></div>
                   
                    <div class="col-md-8 "> 
                    @if ($case->status === 'Completed')
                           <form method="POST" action="/cases/archive/{{ $case->id }}">
                            @csrf
                            <button type="submit" class="fa-solid fa-box-archive btn btn-info">Archive</button>
                        </form>
                        @endif
                     </div>
                    </div>
                    
                </td>
                <td>
                
                <a href="{{ route('etapes.index', $case->id) }}">etapes</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    
        <div style="display: flex; justify-content: center;">
            <a href="/MyClients/" class="btn btn-dark">Go To clients list</a>
          </div>
          
   

    @endif

</div>
<style>
    .case-description {
        width: 200px; /* Adjust the width as needed */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .btn btn-dark {
        margin-left: 50px;
    }
</style>

<script>
    // Add click event listener to table rows
    const tableRows = document.querySelectorAll('.table-row');
    tableRows.forEach((row) => {
        row.addEventListener('click', () => {
            // Remove highlight from previously selected row
            const selectedRow = document.querySelector('.selected');
            if (selectedRow) {
                selectedRow.classList.remove('selected');
            }
            // Highlight clicked row
            row.classList.add('selected');
            // Redirect to edit page
            const url = row.dataset.url;
            window.location.href = url;
        });
    });
</script>

</x-layout>
