<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
      
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

        <div class="container">
            {{-- <div class="form-container"> --}}
            <h1 style="margin: 0 auto; width: 50%;">Edit Client</h1>
            <form action="{{ route('MyClients.update', $client->id) }}" method="POST" style="margin: 0 auto; width: 50%;">
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
    </div>
    </main>

</x-layout>
<style>/* Style the form container */
   .form-container {
  max-width: 100px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  position:absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}




    
    /* Style the form labels */
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    /* Style the form inputs */
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    
    /* Style the form button */
    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 8px 275px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    button[type="submit"]:hover {
      background-color: #3e8e41;
    }
  
    



    </style>