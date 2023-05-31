<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
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
                <p class="text-gray-700"><strong>Next Step</strong> {{$etapes->next_steps}}</p>
                <a href="#" class=" ">View Document</a>

            </div>

            <div class="flex justify-between items-center mb-2">
                <p class="text-gray-700"><strong>Assigned to:</strong> {{$affaire->client->name}} {{$affaire->client->lastName}}</p>
                <p class="text-gray-700"><strong>Status:</strong> {{$affaire->status}}</p>
            </div>
            <div class="flex justify-between items-center mb-2">
                <p class="text-gray-700"><strong>Priority:</strong> {{$affaire->priorité}}</p>
                <p class="text-gray-700"><strong>Deadline:</strong> {{$etapes->deadline}}</p>
            </div>
            <a href="{{ route('etapes.edit', $etapes->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="edit-button">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <form method="POST" action="{{ route('cases.archive', $affaire->id) }}">
                @csrf
                <button type="submit">Archive Case</button>
            </form>
            

           
            

        </div>
    </div>
</main>
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