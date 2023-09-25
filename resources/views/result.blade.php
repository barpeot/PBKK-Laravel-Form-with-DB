<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-dark-subtle">
    <div class="position-absolute top-50 start-50 translate-middle bg-body-secondary rounded">
        @if (session('status'))
            <h1 class="text-center mt-2 px-3">{{ session('name') }}, {{ session('status') }}</h1>
        @endif
        @foreach($results as $key => $result)
        @if ($loop->last)
        <img class="mt-2 px-3 rounded" src="{{ asset('storage/images/'.$result) }}" style="height: 350px; width: auto;">
        <br>
        @endif
        <p class="mt-2 px-3">
            {{ $key }} = {{ $result }}
            @if($key === 'Bounty')
            Million Dollars
            @endif
            <br>
        </p>
        @endforeach
        <form method="post" action="/result">
            @csrf
            <button type="submit" class="btn btn-outline-primary mt-3 px-3">Reset</button>
        </form>
    </div> 
</body>
</html>