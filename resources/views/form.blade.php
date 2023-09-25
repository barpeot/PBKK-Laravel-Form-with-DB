<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="bg-dark-subtle">
    <div class="position-absolute top-50 start-50 translate-middle bg-body-secondary rounded">
        <form method="POST" action="/form" enctype="multipart/form-data">
            @csrf
            <div class="text-center mt-2 px-3">
                <h1>Pirate Crew Registration Form</h1>
                <br>
                <img src=https://img.freepik.com/free-vector/pirate-treasure-island-vector-map-sea-ship-adventure-ocean-skull-paper-navigation-art-cannon-illustration_1284-41581.jpg?w=740&t=st=1695619393~exp=1695619993~hmac=7f982435ab5bbf360963f197af24b53ac57b766efe1e7aaa14f8ff7574d4e169 
                class="img-fluid" alt="" style="width: 200px; height: auto;">
            </div>
            <div class="mb-1 px-3">
                <label for="email" class="form-label">Email</label>
                <br>
                <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1 px-3">
                <label for="password" class="form-label">Password</label>
                <br>
                <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1 px-3">
                <label for="name" class="form-label">Name</label>
                <br>
                <input type="name" id="name" name="name" placeholder="Enter Name" class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1 px-3">
                <label for="float" class="form-label">Bounty (in Millions dollar)</label>
                <br>
                <input type="float" id="float" name="float" placeholder="We only accept 2.5 - 99.99 Mil Pirates" class="form-control">
                @error('float')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1 px-3">
                <label for="image" class="form-label">Image</label>
                <br>
                <input type="file" id="image" name="image" accept="image/*" class="form-control">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3 px-3">Submit</button>
        </form>
    </div>
</body>
</html>