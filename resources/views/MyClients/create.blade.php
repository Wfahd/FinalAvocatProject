<x-layout bodyClass="g-sidenav-show  bg-gray-200">
  <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

  <div class="container pt-3">

    <div class="p-4 shadow-lg rounded-lg" style="width: 100%">

      <h2 class="text-2xl text-primary text-center text-decoration-none mb-4">Add Client</h2>
      <div class="card p-4 shadow-lg rounded-lg mx-auto">

      <form action="/MyClients" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="name" class="text-dark text-lg font-bold">Name</label> <br>

            <input type="text" class="form-input mt-2 rounded-md shadow-sm block w-full" id="name" name="name" required>
          </div>
          
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
      
</div>
</div>
<style>
  /* Style for the container */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

/* Style for the card */
.card {
  width: 100%;
  max-width: 600px;
  background-color: white;
}

/* Style for the form inputs */
.form-input {
  border: 1px solid #d2d6dc;
  padding: 8px;
  font-size: 16px;
  color: #374151;
}

/* Style for the form select */
.form-select {
  border: 1px solid #d2d6dc;
  padding: 8px;
  font-size: 16px;
  color: #374151;
  appearance: none;
  background: transparent;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23a1a1aa' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'%3E%3C/path%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 0.5rem center;
}

/* Style for the form radio buttons */
.form-radio {
  border-color: #d2d6dc;
  appearance: none;
  background-color: white;
  width: 1.2em;
  height: 1.2em;
  border-radius: 50%;
  margin: 0;
  cursor: pointer;
}

.form-radio:checked {
  background-color: #374151;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Ccircle cx='12' cy='12' r='5'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: center center;
}

/* Style for the form submit button */
.btn-primary {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  background-color: #1e40af;
  border-color: transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #1e3a8a;
}

.btn-primary:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(66, 153, 225, 0.5);
}

.btn-primary:active {
  background-color: #1c2d63;
  border-color: #1c2d63;
}

/* Style for the form cancel button */
.btn-secondary {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  color: #374151;
  background-color: #d2d6dc;
  border-color: transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  line-height: 1.
}
</style>


</x-layout>