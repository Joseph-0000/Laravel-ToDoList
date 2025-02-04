<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-dark container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row h-100  w-100">
        <div class="col-6 mx-auto ">
            <div class="card px-4 py-3  ">
                <h1>Welcome</h1>
            </div>
        </div>
    </div>
</body>
</html>