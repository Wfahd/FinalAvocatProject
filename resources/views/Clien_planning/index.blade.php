<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='Plannings'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-200 h-200 border-radius-lg ">
                <x-navbars.navs.auth titlePage="Plannings"></x-navbars.navs.auth>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div  class="p-4" >
    <table  class="p-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plannings as $planning)
            <tr>
                <td>{{ $planning->id }}</td>
                <td>{{ $planning->date }}</td>
                <td>{{ $planning->message }}</td>
                <td>{{ $planning->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="pt-3">
    <a href="{{route ('clien_planning.create')}}" class=" btn btn-outline-danger" > Add New Planning </a></div>
</body>
</html>







            </main>
            <x-plugins></x-plugins>
    </x-layout>