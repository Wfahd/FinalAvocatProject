
    <x-layout bodyClass="g-sidenav-show bg-gray-200">
         <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

        <div class="pt-4">
            <div class="progress-item bg-gray-100 p-5 rounded-lg shadow-md" id="progress-item">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Progress Update #1</h3>
                    <span class="text-sm text-gray-500">May 3, 2023</span>
                </div>
                <div class="border-b-2 border-gray-300 pb-4 mb-4">
                    <p class="text-gray-700"><strong>Description:</strong> {{$affaire->Description}}</p>
                    <p class="text-gray-700"><strong>Notes:</strong> {{$etapes->notes}}</p>
                    <a href="#" class="text-blue-500 hover:underline">View Document</a>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700"><strong>Assigned to:</strong> {{$affaire->client->name}} {{$affaire->client->lastName}}</p>
                    <p class="text-gray-700"><strong>Status:</strong> {{$affaire->status}}</p>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700"><strong>Priority:</strong> {{$affaire->priorité}}</p>
                    <p class="text-gray-700"><strong>Deadline:</strong> {{$etapes->deadline}}</p>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="edit-button">Edit</button>
            </div>
            <form method="POST" action="{{ route('cases.archive', $affaire->id) }}">
                @csrf
                <button type="submit">Archive Case</button>
            </form>
            

            <script>
                const progressItem = document.getElementById("progress-item");
                const editButton = document.getElementById("edit-button");

                // Set initial state of progress item to not editable
                progressItem.contentEditable = false;

                // Add click event listener to edit button
                editButton.addEventListener("click", () => {
                    if (progressItem.contentEditable === "true") {
                        // Disable editing mode
                        progressItem.contentEditable = false;
                        editButton.textContent = "Edit";
                    } else {
                        // Enable editing mode
                        progressItem.contentEditable = true;
                        editButton.textContent = "Save";
                    }
                });
            </script>
            
        </div>
    </x-layout>



