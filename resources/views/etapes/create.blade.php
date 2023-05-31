
<x-layout bodyClass="g-sidenav-show bg-gray-200">
  <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>
      <div class="max-w-md pt-4 mx-auto">
          <form method="POST" action="{{ route('etapes.store', ['id' => $affaire->id]) }}" class="max-w-md mx-auto p-4 bg-gray-100 rounded-md shadow-md">
              @csrf
              <div class="mb-4">
                  <label class="block text-gray-700 font-bold mb-2" for="deadline">
                      Deadline
                  </label>
                  <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="deadline" type="date" placeholder="Deadline">
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 font-bold mb-2" for="next_step">
                      Notes
                  </label>
                  <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="notes" type="text" placeholder="notes"></textarea>
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 font-bold mb-2" for="document">
                      Document
                  </label>
                  <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="document" type="file" placeholder="Document">
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 font-bold mb-2" for="next_step">
                      Next Step
                  </label>
                  <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="next_step" type="text" placeholder="Next Step">
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 font-bold mb-2" for="case_id">
                      Affaire ID
                  </label>
                  <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="case_id" value="{{$affaire->id}}" placeholder="Affaire ID">
              </div>
              <div class="flex items-center justify-between">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                      Next
                  </button>
                  <button href="/MyClients/" class="" type="submit">
                    Done
                  </button>
              </div>
          </form>
      </div>
  </main>
  <style>/* Center the form */
    .max-w-md {
      margin: 0 auto;
    }
    
    /* Style form inputs */
    input[type="date"],
    input[type="file"],
    textarea {
      display: block;
      width: 100%;
      padding: 0.5rem;
      font-size: 1rem;
      line-height: 1.5;
      color: #4a5568;
      background-color: #ffffff;
      border: 1px solid #cbd5e0;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    input[type="date"]:focus,
    input[type="file"]:focus,
    textarea:focus {
      outline: none;
      border-color: #4f46e5;
      box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
    }
    
    /* Style form labels */
    label {
      display: block;
      font-size: 1rem;
      font-weight: 600;
      line-height: 1.5;
      color: #374151;
      margin-bottom: 0.5rem;
    }
    
    /* Style form buttons */
    button[type="submit"] {
      display: inline-block;
      background-color: #4f46e5;
      border: 1px solid transparent;
      color: #ffffff;
      padding: 0.5rem 1rem;
      font-size: 1rem;
      font-weight: 600;
      line-height: 1.5;
      text-align: center;
      text-decoration: none;
      border-radius: 0.25rem;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        box-shadow 0.15s ease-in-out;
    }
    
    button[type="submit"]:hover {
      background-color: #4338ca;
    }
    .max-w-md {
  max-width: 45rem;
}

    
    button[type="submit"]:focus {
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.5);
    }
    
    /* Style the form container */
    form {
      background-color: #f3f4f6;
      border-radius: 0.5rem;
      padding: 1rem;
      box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.1);
    }
    </style>
</x-layout>
