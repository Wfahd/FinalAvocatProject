<!-- resources/views/MyClients/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Client</h1>
        <form action="{{ route('MyClients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
            </div>
            <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $client->astName }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="active" {{ $client->status === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $client->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sex">Sex</label>
                <select class="form-control" id="sex" name="sex">
                    <option value="male" {{ $client->sex === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $client->sex === 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
