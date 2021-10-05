<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/userProfile.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/product.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/img/logo/favison.ico.ico')}}" />
    <title>4Speed-Profile</title>
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>