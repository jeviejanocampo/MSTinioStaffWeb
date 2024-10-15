<!-- resources/views/staff/sections/dayReports.php -->

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .font-lato {
        font-family: 'Lato', sans-serif;
    }
</style>

<div class="flex flex-col p-4 space-y-4 lg:flex-row lg:space-x-4">
    <!-- Left Column: 2 Cards -->
    <div class="lg:w-2/3 space-y-4">

        <!-- Card 1: Orders Table -->
        <div class="bg-white rounded-lg shadow-md p-4 h-[300px] overflow-y-auto"> <!-- Card height fixed with scrolling enabled -->
            <h2 class="font-lato font-semibold text-lg mb-4">Orders in the Past 3 Hours</h2>

            <!-- Scrollable Table -->
            <div class="overflow-y-auto"> <!-- Ensures the table scrolls if it's long -->
                <table class="w-full border border-gray-300 text-left">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b font-semibold">Order ID</th>
                            <th class="py-2 px-4 border-b font-semibold">Checkout ID</th>
                            <th class="py-2 px-4 border-b font-semibold">User ID</th>
                            <th class="py-2 px-4 border-b font-semibold">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border-b">1</td>
                            <td class="py-2 px-4 border-b">CHK-101</td>
                            <td class="py-2 px-4 border-b">USR-500</td>
                            <td class="py-2 px-4 border-b text-green-600">Completed</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border-b">2</td>
                            <td class="py-2 px-4 border-b">CHK-102</td>
                            <td class="py-2 px-4 border-b">USR-501</td>
                            <td class="py-2 px-4 border-b text-yellow-500">Pending</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border-b">3</td>
                            <td class="py-2 px-4 border-b">CHK-103</td>
                            <td class="py-2 px-4 border-b">USR-502</td>
                            <td class="py-2 px-4 border-b text-red-500">Cancelled</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border-b">4</td>
                            <td class="py-2 px-4 border-b">CHK-104</td>
                            <td class="py-2 px-4 border-b">USR-503</td>
                            <td class="py-2 px-4 border-b text-green-600">Completed</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border-b">5</td>
                            <td class="py-2 px-4 border-b">CHK-105</td>
                            <td class="py-2 px-4 border-b">USR-504</td>
                            <td class="py-2 px-4 border-b text-yellow-500">Pending</td>
                        </tr>
                        <!-- Duplicate rows removed for brevity -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Card 2 -->
       <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md p-4 h-[300px] flex flex-col justify-between"> <!-- Use flex to align items -->
            <h2 class="font-lato font-semibold text-lg mb-2">Sales Over Time</h2>
            <canvas id="splineChart" class="flex-grow"></canvas> <!-- Flex-grow to fill the remaining space -->
        </div>

    </div>

<!-- Right Column: 1 Card -->
<div class="lg:w-1/3 flex flex-col">
    <div class="bg-white rounded-lg shadow-md p-4 h-[550px]"> <!-- Set fixed height to match Card 1 and 2 -->
        <h2 class="font-lato font-semibold text-lg mb-4">Card 3 Title</h2>

        <!-- Scrollable Content Inside Card 3 -->
        <div class="h-full overflow-y-auto flex-grow"> <!-- Allow it to take the remaining space and be scrollable -->
            <div class="space-y-4">
                <!-- Inner Card 1 -->
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 1" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 1</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                <div class="flex items-center bg-gray-100 p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/50" alt="Image 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-lato font-semibold">Title 2</h3>
                        <p class="font-lato text-gray-600">Short Description</p>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
</div>
</div>

<script>
    const ctx = document.getElementById('splineChart').getContext('2d');
    const splineChart = new Chart(ctx, {
        type: 'line', // Use 'line' for spline effect
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Sales',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: true,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.4 // Makes the line smooth (spline effect)
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Allow the chart to resize based on the canvas size
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Optional: Resize chart on window resize
    window.addEventListener('resize', () => {
        splineChart.resize();
    });
</script>

