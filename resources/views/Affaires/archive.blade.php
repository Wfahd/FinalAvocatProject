<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

                <html>
                <head>
                    <title>Archived Cases</title>
                    <link href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
                </head>
                <body class="bg-gray-100">
                    <div class="container mx-auto my-8">
                        <h1 class=" text-uppercase font-weight-bold text-purple my-5">Archive</h1>
                        
@foreach ($archivedCases as $case)

                    <div class="flex flex-wrap">
                            <div class="w-full md:w-1/3 px-4 mb-5">
                                <div class="bg-white rounded-lg shadow-lg">
                                    <div class="p-4">
                                        <div class="row">
                                            <h1 class="col text-lg font-bold  mb-2">{{ $case->Name }}</h1>     <h2 class="col px-4 text-danger text-lg font-bold ml-2">{{ $case->client->name }} {{ $case->client->lastName }}</h2>

                                        </div>

                                        <p class="text-gray-700 mb-4">{{ $case->Description }}</p>
                                        <div class="row">
                                        <a href="#" class="col block text-center bg-blue-500 hover:bg-blue-700 text-info font-bold py-2  rounded">View Case Details</a>
                                        <p class="text-secondary col pl-9">{{ $case->created_at}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                          
                        </div>
                    </div>
                    @endforeach
                </body>
                </html>
                










</x-layout>

