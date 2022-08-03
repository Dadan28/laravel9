<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="css/app.css">

</head>

<body>
    <h1>Home</h1>
    <h4>Belajar laravel 9</h4>


    {{-- Components --}}

    @component('components.alert')
        @slot('header')
            Header
        @endslot
        Hello ini adalah components

        @slot('footer')
            Footer
        @endslot
    @endcomponent

</body>

</html>
