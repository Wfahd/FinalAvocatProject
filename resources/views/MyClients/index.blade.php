{{-- 
@extends('layouts.app')
@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
<<<<<<< HEAD

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <h2 class="text-decoration-underline fw-bolder p-4">List of My Clients</h2>
=======
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
</x-layout>

    @endsection
    
    

 




    
<<<<<<< HEAD

=======
@endsection
</x-layout> 
 --}}


 <x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>


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
                    <div class="row">
                      <form class="col" action="{{ route('clients.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-white text-dark rounded-md mr-4 border-none">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                    
                    
                        <a href="{{ route('clients.edit', $item->id) }}" class="col fa fa-pencil-square-o px-4 py-2 bg-white-200 text-dark rounded-md"></a>
                    </div>
                    
                
                     {{-- <div class="row">

                         <form class="col"  action="{{ route('clients.destroy', $item->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md">
                                 <i class="fa fa-trash text-danger"></i> 
                             </button>
                         </form>
                         <a href="{{ route('clients.edit', $item->id) }}" class="col fa fa-pencil-square-o px-4 py-2 bg-blue-600 text-white rounded-md"></a>
                     </div>
                 </td>--}}
                 <td>
                     <a href="{{ route('Affaires.cases', ['id' => $item->id]) }}" class="px-4 py-2 bg-info text-white rounded-md">Voir les Affaires</a>
                 </td> 
             </tr>
         @endif
     @endforeach
 </tbody>
</table>

<div class="flex justify-between">
    <a href="/MyClients/create" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 border border-gray-500 rounded">Add New Client</a>
    <a href="/MyClients/Affaires/createCase" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 border border-gray-500 rounded">Add New Affaire</a>
    <a href="/MyClients/Affaires/archives" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 border border-gray-500 rounded">Archived Cases</a>
  </div>
  
</div>
</main>
<style>
 /* .container {
  max-width: 1140px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 15px;
  padding-right: 15px;
}

.alert {
  background-color: #d4edda;
  border-color: #c3e6cb;
  color: #155724;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border-radius: 0.25rem;
}

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  border-collapse: collapse;
}

.table td,
.table th {
  padding: 1rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
  background-color: #212529;
  color: #fff;
}

.text-center {
  text-align: center;
}

.text-white {
  color: #fff;
}

.bg-gray-900 {
  background-color: #1a202c;
}

.bg-gray-200 {
  background-color: #edf2f7;
}

.p-4 {
  padding: 1rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.fw-bolder {
  font-weight: 700;
}

.max-height-vh-100 {
  max-height: 100vh;
}

.h-100 {
  height: 100%;
}

.border-radius-lg {
  border-radius: 0.5rem;
}

.space-x-4 > * + * {
  margin-left: 1rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.bg-red-600 {
  background-color: #dc2626;
}

.text-white {
  color: #fff;
}

.rounded-md {
  border-radius: 0.375rem;
}

.fa-trash {
  font-family: "Font Awesome 5 Solid";
  /* content: "\f2ed"; 


.fa-pencil-square-o {
  font-family: "Font Awesome 5 Solid";
  /* content: "\f044"; 
}*/

.bg-white-600 {
  background-color: #fff;
}

.text-dark {
  color: #333;
}

.bg-primary {
  background-color: #5a5e63;
}

.bg-green-600 {
  background-color: #059669;
}

.bg-info {
  background-color: #0dcaf0;
}















.flex {
  display: flex;
}

/* .justify-between {
  justify-content: space-between;
} */

a {
  color: #fff;
  text-decoration: none;
}

a:hover {
  cursor: pointer;
}

.bg-blue-500 {
  background-color: #444648;
}

.bg-blue-700 {
  background-color: #5e6169;
}

.font-bold {
  font-weight: bold;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.border {
  border-width: 1px;
}

.border-gray-500 {
  border-color: #6b7280;
}

.rounded {
  border-radius: 0.25rem;
}

.hover\:bg-blue-700:hover {
  background-color: #35373b;
}

.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #54565a;
  color: #fff;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: all 0.15s ease-in-out;
}

.btn:hover {
  background-color: #38393d;
  color: #fff;
  border-color:  #383938;
}

.btn:focus {
  outline: none;
  box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.5);
}

.btn:active {
  background-color: #77787c;
  color: #fff;
  border-color: #4a4c50;
}

.btn-primary {
  background-color: #5a5d62;
  color: #fff;
  border-color: #505357;
}

.btn-primary:hover {
  background-color: #54575e;
  color: #fff;
  border-color: #3f4043;
}

.btn-primary:focus {
  outline: none;
  box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.5);
}

.btn-primary:active {
  background-color: #46474c;
  color: #fff;
  border-color: #666a74;
}


</style> 

</x-layout> 


