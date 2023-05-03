<!--

<div class="container pt-3">

<div class="card p-4">

<div class="container">
    <h2 class="fw-bolder text-primary text-center text-decoration-underline p-4" >Add Client</h2>


    <form action="/MyClients" method="POST"> @csrf
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="name" class="form-label d-inline-block text-md-end">Name</label>
          </div>
          <div class="col-md-9">
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="lastName" class="form-label d-inline-block text-md-end">Last Name</label>
          </div>
          <div class="col-md-9">
            <input type="text" class="form-control" id="lastName" name="LastName" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="status" class="form-label d-inline-block text-md-end">Status</label>
          </div>
          <div class="col-md-9">
            <select class="form-select" id="status" name="status" required>
              <option value="">Select status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Widowed">Widowed</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="email" class="form-label d-inline-block text-md-end">Email address</label>
          </div>
          <div class="col-md-9">
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="phone" class="form-label d-inline-block text-md-end">Phone</label>
          </div>
          <div class="col-md-9">
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="sex" class="form-label d-inline-block text-md-end">Sex</label>
          </div>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="male" value="Male" required>
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="female" value="Female" required>
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-primary">Submit</button>
      
          <a href="/MyClients/" type="submit" class="btn btn-outline-secondary">Annuler</a>
      </div>
      </form>
    </div>
  
      
</div>
</div>-->
     










@extends('layouts.app')

@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">

  <div class="container pt-3">

    <div class="card p-4 shadow-lg rounded-lg">
      <h2 class="text-2xl text-primary text-center text-decoration-underline mb-4">Add Client</h2>

      <form action="/MyClients" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="name" class="text-gray-600">Name</label>
            <input type="text" class="form-input mt-2 rounded-md shadow-sm block w-full" id="name" name="name" required>
          </div>
          <div>
            <label for="lastName" class="text-gray-600">Last Name</label>
            <input type="text" class="form-input mt-2 rounded-md shadow-sm block w-full" id="lastName" name="LastName" required>
          </div>
        </div>

        <div class="mt-4">
          <label for="status" class="text-gray-600">Status</label>
          <select class="form-select mt-2 block w-full rounded-md shadow-sm" id="status" name="status" required>
            <option value="">Select status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
          </select>
        </div>

        <div class="mt-4">
          <label for="email" class="text-gray-600">Email address</label>
          <input type="email" class="form-input mt-2 rounded-md shadow-sm block w-full" id="email" name="email" required>
        </div>

        <div class="mt-4">
          <label for="phone" class="text-gray-600">Phone</label>
          <input type="tel" class="form-input mt-2 rounded-md shadow-sm block w-full" id="phone" name="phone" required>
        </div>

        <div class="mt-4">
          <label class="text-gray-600">Sex</label>
          <div class="mt-2">
            <label for="male" class="inline-flex items-center mr-6">
              <input type="radio" class="form-radio" name="sex" id="male" value="Male" required>
              <span class="ml-2 text-gray-700">Male</span>
            </label>

            <label for="female" class="inline-flex items-center">
              <input type="radio" class="form-radio" name="sex" id="female" value="Female" required>
              <span class="ml-2 text-gray-700">Female</span>
            </label>
          </div>
        </div>

        <div class="mt-4 flex justify-center">
          <button type="submit" class="btn-primary inline-flex items-center ml-4 px-4 py-2 border border-gray-300 rounded-md text-base font-medium text-gray-700 hover:bg-black-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Submit</button>

          <a href="/MyClients/" type="submit" class="btn-primary inline-flex items-center ml-4 px-4 py-2 border border-gray-300 rounded-md text-base font-medium text-gray-700  hover:bg-black-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Annuler</a>
        </div> 
      </form>
    </div>
  
      
</div>
</div>



@endsection
</x-layout>