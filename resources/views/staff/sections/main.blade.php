<!-- resources/views/staff/sections/main.dashboard.php -->

@extends('staff.dashboard') <!-- If you have a layout to extend -->

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<h1 style="font-weight: 600; font-family:system-ui, -apple-system, BlinkMacSystemFont,
 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Dashboard</h1>
@include('staff.sections.main-parts.reportCards') 
@include('staff.sections.main-parts.dayReports') 


</body>
</html>
@endsection