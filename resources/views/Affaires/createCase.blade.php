@extends('layouts.app')
@section('content')


<form class="add-case-form" action="/MyClients/Affaires/cases" method="POST" >@csrf
  <h2 class="text-primary fw-bold text-decoration-underline">Add a New Case</h2>
  <div class="row">
  <div class="col">
  <div class="form-group">
    <label for="case-name">Case Name</label>
    <input type="text"  name="name" required>
  </div>
  <div class="form-group">
    <label for="case-description">Case Description</label>
    <textarea  name="Description" required></textarea>
  </div>  </div>


  <div class="col">
  <div class="form-group">
    <label for="case-status">Case Status</label>
    <select  name="status" required>
      <option value="">Select Status</option>
      <option value="In Progress">In Progress</option>
      <option value="Completed">Completed</option>
    </select>
  </div>
  <br>
  <div class="form-group">
  <label for="case-status">priorité d'Affaire</label>
  <select  name="priorité" required>
    <option value="">none</option>
    <option value="HIGH">HIGH</option>
    <option value="Medium">Medium </option>
    <option value="Low">Low</option>

  </select>  </div>

    <br>
    <div class="form-group">
<label for="case-status">case's client</label>
<select  name="client_id" required>
@foreach ($client as $item)
@if(Auth::user()->id == $item->user_id)


  <option value="{{$item->id}}">{{$item->lastName}}</option>
  @endif
  @endforeach
</select>
</div>

</div>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-outline-primary">Submit</button>

    <a href="/MyClients/" type="submit" class="btn btn-outline-secondary">Annuler</a>
</div>
</form>

<style>
  

.add-case-form {
  max-width: 1100px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.add-case-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group textarea {
  height: 150px;
}


</style>
@endsection
