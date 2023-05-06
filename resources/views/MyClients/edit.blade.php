<!-- resources/views/MyClients/edit.blade.php -->

@extends('layouts.app')

@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
<div class="container mx-auto px-4">
<h1 class="text-2xl font-bold my-3">Edit Client</h1>
<form action="{{ route('MyClients.update', $client->id) }}" method="POST" class="max-w-md mx-auto">
@csrf
@method('PUT')
<div class="mb-4">
<label for="name" class="block font-medium mb-2">Name</label>
<input type="text" class="form-input w-full" id="name" name="name" value="{{ $client->name }}">
</div>
<div class="mb-4">
<label for="LastName" class="block font-medium mb-2">Last Name</label>
<input type="text" class="form-input w-full" id="LastName" name="LastName" value="{{ $client->astName }}">
</div>
<div class="mb-4">
<label for="email" class="block font-medium mb-2">Email</label>
<input type="email" class="form-input w-full" id="email" name="email" value="{{ $client->email }}">
</div>
<div class="mb-4">
<label for="phone" class="block font-medium mb-2">Phone</label>
<input type="tel" class="form-input w-full" id="phone" name="phone" value="{{ $client->phone }}">
</div>
<div class="mb-4">
<label for="status" class="block font-medium mb-2">Status</label>
<select class="form-select w-full" id="status" name="status">
<option value="active" {{ $client->status === 'active' ? 'selected' : '' }}>Active</option>
<option value="inactive" {{ $client->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
</select>
</div>
<div class="mb-4">
<label for="sex" class="block font-medium mb-2">Sex</label>
<select class="form-select w-full" id="sex" name="sex">
<option value="male" {{ $client->sex === 'male' ? 'selected' : '' }}>Male</option>
<option value="female" {{ $client->sex === 'female' ? 'selected' : '' }}>Female</option>
</select>
</div>


        <button type="submit" class="btn btn-danger ">Save Changes</button>
    </form>
</div>

@endsection
</x-layout>