<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional: Include your CSS file -->
</head>
<body>
    <h1>Job Listings</h1>
    @foreach ($listes as $job)
        <h2>{{ $job['title'] }}</h2>
        <ul>
            @foreach ($job['tasks'] as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
