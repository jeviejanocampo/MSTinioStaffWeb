<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Side</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f4;
            height: 100vh; /* Ensure the body takes full height */
            overflow: hidden; /* Prevent scrolling on the body */
        }

        .sidebar {
            background-color: #111e2e;
            color: white;
            width: 16%;
            height: 100vh; /* Full height sidebar */
            position: fixed; /* Keep it fixed to the side */
            left: 0;
            top: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar img {
            height: 124px;
            width: 124px;
            border-radius: 50%;
            margin: 0 auto 20px;
            border: 2px solid #ffffff;
            display: block;
        }

        .nav-item {
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
            display: block;
            color: white;
            font-weight: 300;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .nav-item:hover {
            background-color: #2b6cb0;
            color: white;
        }

        .main-content {
            margin-left: 16%; /* Offset to avoid overlap with the sidebar */
            width: 84%; /* Take up the remaining space */
            height: 100vh;
            overflow-y: auto; /* Enable vertical scrolling for the content */
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
                overflow: auto; /* Allow scrolling for smaller screens */
            }

            .sidebar {
                position: static; /* Revert to static positioning */
                width: 100%;
                min-height: 20vh;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .nav-item {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .nav-item {
                font-size: 16px;
            }

            .sidebar img {
                height: 100px;
                width: 100px;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="flex items-center justify-center mb-4">
        <img src="{{ asset('assets/images/mstiniologo.jpg') }}" alt="Logo">
    </div>
    <nav class="flex-grow">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" class="nav-item">Dashboard</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="{{ route('products') }}" class="nav-item">View Orders</a>
            </li>
        </ul>
    </nav>
</div>

<main class="main-content">
    @yield('content')
</main>

</body>
</html>
