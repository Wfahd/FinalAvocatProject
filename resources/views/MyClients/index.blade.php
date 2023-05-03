{{-- 
@extends('layouts.app')
@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
<div class="container pt-4">
    <div class="text-center">
        <h2 class="fw-bolder p-4 mx-auto" style="font-size: 2em;">List of My Clients</h2>
      </div>
      
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
  
    
    
    

 




    
@endsection
</x-layout> 
 --}}




 @extends('layouts.app')
 @section('content')
 <x-layout bodyClass="g-sidenav-show  bg-gray-200">
 <div class="container pt-4">
     <div class="text-center">
         <h2 class="fw-bolder p-4 mx-auto" style="font-size: 2em;">List of My Clients</h2>
       </div>
 @if(session('success'))
 <div class="alert alert-success">
     {{ session('success') }}
 </div>
@endif

<table class="table w-full">
 <thead class="bg-gray-900 text-white">
     <tr>
         <th scope="col">#</th>
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
                 <th>{{ $item->id }}</th>
                 <td>{{ $item->name }}</td>
                 <td>{{ $item->lastName }}</td>
                 <td>{{ $item->email }}</td>
                 <td>{{ $item->phone }}</td>
                 <td>{{ $item->status }}</td>
                 <td>{{ $item->sex }}</td>
                 <td>
                     <div class="flex justify-center items-center space-x-4">
                         <form  action="{{ route('clients.destroy', $item->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md">
                                 <i class="fa fa-trash"></i> 
                             </button>
                         </form>
                         <a href="{{ route('clients.edit', $item->id) }}" class="fa fa-pencil-square-o px-4 py-2 bg-blue-600 text-white rounded-md"></a>
                     </div>
                 </td>
                 <td>
                     <a href="{{ route('Affaires.cases', ['id' => $item->id]) }}" class="px-4 py-2 bg-primary text-white rounded-md">Voir Les Affaires</a>
                 </td>
             </tr>
         @endif
     @endforeach
 </tbody>
</table>

<div class="text-center mt-8">
 <a href="/MyClients/create" class="px-4 py-2 bg-green-600 text-white rounded-md mr-4">Add New Client</a>
 <a href="/MyClients/Affaires/createCase" class="px-4 py-2 bg-green-600 text-white rounded-md">Add New Affaire</a>
</div>
</div>
</x-layout>


@endsection