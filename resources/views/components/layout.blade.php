<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower App | {{ $title }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


    <link rel="stylesheet" href="/style/style.css">

</head>

<body class="overflow-y-auto">

    <section class="{{ in_array(request()->route()->uri(), ['history', 'favorite']) ? 'py-5' : '' }}">
        {{ $slot }}
    </section>

    @if (!in_array(request()->route()->uri(), ['detail']))
        <x-navbar />
    @endif

    <script src="js/script.js"></script>
</body>

</html>
