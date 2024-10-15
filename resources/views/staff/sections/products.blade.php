<!-- resources/views/staff/sections/products.blade.php -->

@extends('staff.dashboard') <!-- Extending the same layout as the dashboard -->

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        // JavaScript to handle search and date filter dynamically
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const dateInput = document.getElementById('dateInput');
            const tableRows = document.querySelectorAll('tbody tr');

            // Filter table based on search input
            searchInput.addEventListener('input', function () {
                filterTable();
            });

            // Filter table based on date input
            dateInput.addEventListener('input', function () {
                filterTable();
            });

            function filterTable() {
                const searchValue = searchInput.value.toLowerCase();
                const dateValue = dateInput.value;

                tableRows.forEach(row => {
                    const orderId = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                    const userId = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const orderDate = row.querySelector('td:nth-child(3)').textContent.split(' ')[0]; // Extract date only

                    const matchesSearch = orderId.includes(searchValue) || userId.includes(searchValue);
                    const matchesDate = !dateValue || orderDate === dateValue;

                    if (matchesSearch && matchesDate) {
                        row.style.display = ''; // Show row
                    } else {
                        row.style.display = 'none'; // Hide row
                    }
                });
            }
        });
    </script>
</head>

<body>
    <h1 style="font-weight: 600; font-family:system-ui, -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
        Products
    </h1>

    <!-- Filters Section -->
    <div class="flex justify-between items-center p-6">
        <!-- Search Bar -->
        <div class="w-1/2">
            <input type="text" id="searchInput" placeholder="Search orders..." 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Date Filter -->
        <div class="w-1/3">
            <input type="date" id="dateInput" 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <!-- Product Orders Table -->
    <div class="overflow-x-auto p-6">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="py-2 px-4">Order ID</th>
                    <th class="py-2 px-4">User ID</th>
                    <th class="py-2 px-4">Order Date</th>
                    <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row 1 -->
                <tr class="border-b">
                    <td class="py-2 px-4 text-center">1001</td>
                    <td class="py-2 px-4 text-center">501</td>
                    <td class="py-2 px-4 text-center">2024-10-15 12:30 PM</td>
                    <td class="py-2 px-4 text-center">
                        <a href="{{ route('view-orders', ['order_id' => 1001]) }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded">
                            View
                        </button>
                        </a>
                    </td>
                </tr>
                <!-- Example Row 2 -->
                <tr class="border-b">
                    <td class="py-2 px-4 text-center">1002</td>
                    <td class="py-2 px-4 text-center">502</td>
                    <td class="py-2 px-4 text-center">2024-10-14 10:45 AM</td>
                    <td class="py-2 px-4 text-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded">
                            View
                        </button>
                    </td>
                </tr>
                <!-- Example Row 3 -->
                <tr class="border-b">
                    <td class="py-2 px-4 text-center">1003</td>
                    <td class="py-2 px-4 text-center">503</td>
                    <td class="py-2 px-4 text-center">2024-10-13 03:15 PM</td>
                    <td class="py-2 px-4 text-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded">
                            View
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
@endsection
