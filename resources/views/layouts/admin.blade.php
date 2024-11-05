<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OnTime</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">

    <style>
        #map {
            height: 300px;
            /* Set the height for the map */
        }

        /* Modal styles */
        /* Modal styles */
        .modal {
            flex-flow: column;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            overflow-y: scroll;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-header {
            /* background: #86DED7; */
            background: #E8E7EB;
            color: #535353;
            padding: 15px;
            width: 100%;
            max-width: 500px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-weight: bold;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .modal-content {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            border-radius: 0 0 10px 10px;
            /* Rounded bottom corners */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .modal-close {
            cursor: pointer;
            color: #f28300;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body class="min-h-screen">
    <!-- Modal -->


    <nav
        class="h-[150px] bg-[#86DED7] rounded-bl-[50px] rounded-br-[50px] flex flex-row  justify-between px-10 items-center">
        <div>
            @yield('navmenu')
        </div>
        <a href="/dashboard/setting" class="">
            <i class="fa-regular fa-bell text-white text-4xl"></i>
        </a>
    </nav>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <!-- Map and History Section -->
    @yield('content')

</body>

</html>
