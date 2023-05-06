@extends('layouts.app')

@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">

<h1 class="p-3 fw-bold text-danger">Affaires pour {{ $client->name }} {{ $client->lastName }} :</h1>

<div class="container">

    <table class="table">
        <thead>
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
                <td class="truncate" style="max-width: 200px;">{{ $case->Description }}</td>
                <td>{{ $case->priorité }}</td>
                @if ($case->status === 'In Progress')
                <td class="text-warning">{{ $case->status }}</td>
                @else
                <td class="text-success">{{ $case->status }}</td>
                @endif
                <td>{{ $case->created_at }}</td>
                <td class="row">
                    <form class="col" action="{{ route('affaires.destroy', $case->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
               
                <div class="col">
                    <a href="{{ route('affaires.edit', $case->id) }}" class="btn btn-primary">Edit</a></div>
                </td>
                <td><a href="{{ route('etapes.index', $case->id) }}">etapes</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a href="/MyClients/" class="btn btn-success">Go To clients list</a>
    </div>

    @endif

</div>

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
@endsection
