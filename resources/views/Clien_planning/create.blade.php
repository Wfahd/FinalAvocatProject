
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='tables'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-200 h-200 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>





<head>
    <style>
        form {
            width: 400px;
            margin: 0 auto;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="{{ route('clien_planning.store') }}" method="POST">
        @csrf
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <label for="message">Message:</label>
        <input type="text" id="message" name="message">

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>

        <button type="submit">Create Planning</button>
    </form>
</body>
</html>


</main>
<x-plugins></x-plugins>

</x-layout> 
