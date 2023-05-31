<x-layout bodyClass="g-sidenav-show  bg-gray-200">
  <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

                {{-- <div class="container pt-1   " > --}}
                
                
                

    <div class="p-4 shadow-lg rounded-lg" >

    <div class="p-4 shadow-lg rounded-lg" style="width: 150%">


      <h2 class="text-2xl text-primary text-center text-decoration-none mb-4">Add Client</h2>
      <div class="card p-4 shadow-lg rounded-lg mx-auto">

      <form action="/MyClients" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4"  style=" width: 120%">
          <div>
            <label for="name" class="text-dark text-lg font-bold">Name</label> <br>

            <input type="text" class="form-input mt-2 rounded-md shadow-sm block w-full" id="name" name="name" required>
          </div><br>
          
          <div>
            <label for="lastName" class="text-gray-600">Last Name</label> <br>
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
          <label for="email" class="text-gray-600">Email address</label> <br>
          <input type="email" class="form-input mt-2 rounded-md shadow-sm block w-full" id="email" name="email" required>
        </div>

        <div class="mt-4">
          <label for="phone" class="text-gray-600">Phone</label> <br>
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
  <div>
      
{{-- </div> --}}
</div>
 

{{-- <style>/* Style for the main content */
  /* .main-content {
    background-color: #F5F5F5;
    padding: 2rem;
  }
  
  /* Style for the form */
  .form-input {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  width: 80%;
}

  .form-select {
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
  }
  
  .form-radio {
    margin-right: 0.5rem;
  }
  
  .btn-primary {
    background-color: #3490DC;
    color: white;
    border: none;
    border-radius: 0.25rem;
    padding: 0.5rem 1rem;
    cursor: pointer;
  }
  
  .btn-primary:hover {
    background-color: #2779BD;
  }
  
  /* Responsive styles */
  @media screen and (min-width: 768px) {
    .main-content {
      max-height: 100vh;
      height: 100%;
      border-radius: 1rem;
    }
  
    .grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }
  } */
  </style> --}}
  <style>
    /* Center the form on the page */
.container {
  display: flex;
  justify-content: center;
}

/* Style the form */
.card {
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  max-width: 800px;
  width: 100%;
  margin: 40px auto;
}

/* Style the form title */
.card h2 {
  font-size: 2rem;
  color: #2D3B55;
  text-align: center;
  margin-bottom: 20px;
}
.form-input {
  width: 80%;
  height: 40px;
}


/* Style the form fields */
.form-input {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 10px;
  font-size: 1rem;
  margin-top: 8px;
}

/* Style the form labels */
.text-gray-600 {
  font-size: 1rem;
  font-weight: bold;
  color: #2D3B55;
  margin-bottom: 4px;
}

/* Style the form select field */
.form-select {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 10px;
  font-size: 1rem;
  margin-top: 8px;
}

/* Style the form radio buttons */
.form-radio {
  margin-right: 8px;
}

/* Style the form submit button */
.btn-primary {
  background-color: #2D3B55;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  font-size: 1rem;
  margin-top: 16px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.btn-primary:hover {
  background-color: #1A2533;
}

  </style>

</x-layout>