<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='My Clients'></x-navbars.sidebar>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif
<div class="flex justify-between" >
            @foreach($etapes as $etape)

    <div class="pt-4">


        <div class="progress-item bg-gray-100 p-5 rounded-lg shadow-md" id="progress-item">


            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Progress Update #1</h3>
                <span class="text-sm text-gray-500">May 3, 2023</span>
            </div>
            <div class="border-b-2 border-gray-300 pb-4 mb-4">
                <p class="text-gray-700"><strong>Description:</strong> {{$affaire->Description}}</p>
                <p class="text-gray-700"><strong>Notes:</strong> {{$etape->notes}}</p>
                <p class="text-gray-700"><strong>Next Step</strong> {{$etape->next_steps}}</p>
                <a href="#" class=" ">View Document</a>

            </div>

            <div class="flex justify-between items-center mb-2">
                <p class="text-gray-700"><strong>Assigned to:</strong> {{$affaire->client->name}} {{$affaire->client->lastName}}</p>
                <p class="text-gray-700"><strong>Status:</strong> {{$affaire->status}}</p>
            </div>
            <div class="flex justify-between items-center mb-2">
                <p class="text-gray-700"><strong>Priority:</strong> {{$affaire->priorité}}</p>
                <p class="text-gray-700"><strong>Deadline:</strong> {{$etape->deadline}}</p>
            </div>
            <a href="{{ route('etapes.edit', $etape->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="edit-button">
                <i class="fas fa-pencil-alt"></i>
            </a>
            {{-- <form method="POST" action="{{ route('affaires.archive', $affaire->id) }}">
                @csrf
                <button type="submit">Archive Case</button>
            </form> --}}

            <a href="{{ route('generate-pdf', $affaire->id) }}" class="btn btn-primary">Save as PDF</a>



            
        </div>
       
    </div>
    </div>
    @endforeach


</main>
<script>
    // Get the case ID from the view (you may adjust this based on your view structure)
    const caseId = {{ $affaire->id }};
  
    // Get the container element where you want to display the etapes
    const etapesContainer = document.getElementById('progress-item');
  
    // Make an AJAX request to fetch the etapes
    fetch(`/affaires/${caseId}/etapes`)
      .then(response => response.json())
      .then(etapes => {
        // Clear any existing etapes in the container
        etapesContainer.innerHTML = '';
  
        // Iterate through the etapes and create HTML elements dynamically
        etapes.forEach(etape => {
          // Create an etape element
          const etapeElement = document.createElement('div');
          etapeElement.classList.add('etape');
  
          // Create elements for etape details (e.g., deadline, next_steps)
          const etapeDeadline = document.createElement('h3');
          etapeDeadline.textContent = etape.deadline;
  
          const etapeNextSteps = document.createElement('p');
          etapeNextSteps.textContent = etape.next_steps;
  
          // Append the etape details to the etape element
          etapeElement.appendChild(etapeDeadline);
          etapeElement.appendChild(etapeNextSteps);
  
          // Append the etape element to the container
          etapesContainer.appendChild(etapeElement);
        });
      })
      .catch(error => {
        console.log('Error:', error);
      });
  </script>
  
<style>
    .progress-item {
        max-width: 600px;
        margin: 0 auto;
    }

    #edit-button {
        float: right;
        margin-left: 10px;
        background-color: blueviolet;
        color: white;
    }

    button[type=submit] {
        background-color: blueviolet;
        color: white;
        font-weight: bold;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type=submit]:hover {
        background-color: #aaa;
    }
</style>

</x-layout>