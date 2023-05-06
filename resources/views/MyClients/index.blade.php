{{-- 
@extends('layouts.app')
@section('content')

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table" width="100%" >

        <thead class="thead-dark">
            <tr style=" border-collapse: collapse;">
                <th  scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Sex</th>
                <th scope="col">Actions</th>
                <th scope="col">Les affaires</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $item)
            
            @if(Auth::user()->id == $item->user_id)
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->lastName}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->sex}}</td>
              
                <td >
                    <div class="row">
                    <div class="col ">

                    <form  action="{{ route('clients.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger fw-bold">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form></div>
                    <div class="col pr-5">
                    <a href="{{ route('clients.edit', $item->id) }}" class="btn btn-outline-primary fw-bold ">
                        Edit
                    </a></div>
                    </div>
                </td>
                <td>
                    <a href="{{ route('Affaires.cases', ['id' => $item->id]) }}" class="btn btn-primary">Voir Les Affaires</a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
            <a href="/MyClients/create" class="btn btn-outline-success fw-bold">Add New Client</a>
            <a href="/MyClients/Affaires/createCase" class=" btn btn-outline-success fw-bold">Add New Affaire</a>
        
    </div>
</x-layout>

    @endsection
    
    

 




    

    
@endsection

@endsection