<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invntry</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-screen">

    <!-- Sidebar -->
        <aside class="w-64 border-r hidden md:block">
            <div class="p-6 text-xl font-bold text-blue-600">Invntry</div>
            <ul class="menu px-4 space-y-1">
                <li><a class="active">Dashboard</a></li>
                {{-- <li><a>Orders</a></li>
                <li><a>Customers</a></li>
                <li><a>Payments</a></li>
                <li><a>Inventory</a></li>
                <li><a>Reports</a></li>
                <li><a>User Management</a></li>
                <li><a>Settings</a></li> --}}
                
            </ul>
        </aside>    
        <main class="flex-1 p-6 space-y-6">
            {{$slot}}
        </main>
    </div>
</body>
</html>