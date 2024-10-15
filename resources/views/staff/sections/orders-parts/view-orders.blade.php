@extends('staff.dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function togglePaymentDetails() {
            const paymentDetails = document.getElementById('payment-details');
            paymentDetails.classList.toggle('hidden');
        }
    </script>
</head>

<body class="p-6">
    <!-- Top Row: Status and Header -->
    <div class="flex justify-between items-center">
        <span class="text-lg font-semibold text-yellow-500">Status: PENDING</span>
        <a href="{{ route('products') }}" class="text-blue-500 hover:underline text-lg">&larr; Back</a>
    </div>

    <h1 class="mt-4 text-2xl font-bold">Order Details</h1>

    @php
        $orderId = request()->query('order_id'); // Get the order ID from the query parameter
    @endphp

    <p class="mt-2 text-gray-700">Order ID: {{ $orderId }}</p>
    <p class="mt-2 text-gray-700">Latitude: 9.225599059133128</p>
    <p class="mt-2 text-gray-700">Longitude: 123.29098510118017</p>

    <!-- Products Section -->
    <div class="bg-gray-50 p-4 rounded-lg mt-4">
        <h2 class="text-lg font-semibold mb-4">Products</h2>

        <!-- Card with two product cards inside -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Product 1 -->
            <div class="flex bg-white p-4 rounded shadow-md">
                <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover mr-4">
                <div>
                    <p class="font-semibold">Product ID: 101</p>
                    <p>Quantity: 2</p>
                    <p>Price: ₱150.00</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="flex bg-white p-4 rounded shadow-md">
                <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover mr-4">
                <div>
                    <p class="font-semibold">Product ID: 102</p>
                    <p>Quantity: 1</p>
                    <p>Price: ₱300.00</p>
                </div>
            </div>
            <div class="flex bg-white p-4 rounded shadow-md">
                <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover mr-4">
                <div>
                    <p class="font-semibold">Product ID: 103</p>
                    <p>Quantity: 1</p>
                    <p>Price: ₱300.00</p>
                </div>
            </div>
            <div class="flex bg-white p-4 rounded shadow-md">
                <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover mr-4">
                <div>
                    <p class="font-semibold">Product ID: 104</p>
                    <p>Quantity: 1</p>
                    <p>Price: ₱300.00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Summary Section -->
    <div class="bg-gray-50 p-4 rounded-lg">
        <h2 class="text-lg font-semibold mb-4">Order Summary</h2>
        <p>Total Items: 3</p>
        <p>Delivery Fee: ₱25.00</p>
        <p>Tax Fee: ₱0.00</p>
        <p class="font-bold">Total Amount to Pay: ₱475.00</p>
    </div>

    <!-- Payment Method Section -->
    <div class="bg-gray-50 p-4 rounded-lg mt-4">
        <h2 class="text-lg font-semibold mb-4">Payment Method: GCASH</h2>
        <button onclick="togglePaymentDetails()" class="text-blue-500 hover:underline">View Details</button>

        <!-- Payment Details -->
        <div id="payment-details" class="hidden mt-4">
            <p>User ID: 12345</p>
            <p>Invoice Image: <img src="https://via.placeholder.com/150" alt="Invoice Image" class="mt-2"></p>
            <p>Reference Code: ABC123XYZ</p>
        </div>
    </div>

    <!-- Dropdown to Set Status -->
    <div class="mt-4">
        <label for="status" class="block text-lg font-semibold mb-2">Set Order Status</label>
        <select id="status" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="processing">Processing</option>
            <option value="readytobeaccepted">Ready to be Accepted</option>
            <option value="delivered">Delivered Complete</option>
            <option value="cancelled">Cancelled</option>
            <option value="refunded">Refunded</option>
        </select>
    </div>

    <!-- Map Section -->
    <div class="bg-gray-50 p-4 rounded-lg mt-6">
        <h2 class="text-lg font-semibold mb-4">Get User's Location</h2>
        <iframe 
            src="https://www.gps-coordinates.net/embed/map?lat=9.225599059133128&lon=123.29098510118017" 
            width="100%" 
            height="700" 
            style="border:0;" 
            sandbox="allow-same-origin allow-scripts" 
            allowfullscreen="" 
            loading="lazy"></iframe>
    </div>
</body>
</html>
@endsection
