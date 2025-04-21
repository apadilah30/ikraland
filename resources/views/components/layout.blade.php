<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower App | {{ $title }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


    <link rel="stylesheet" href="/style/style.css">
    <script defer src="/theme/plugins/fontawesome/js/all.min.js"></script>

</head>

<body class="overflow-y-auto mobile-wrapper">

    <section class="{{ in_array(request()->route()->uri(), ['history', 'favorite']) ? '' : '' }} min-h-screen">
        {{ $slot }}
    </section>

    @if (!in_array(request()->route()->uri(), ['detail']))
        <x-navbar />
    @endif

    <script src="js/script.js"></script>
    <script>
        // localStorage.getItem("token") == null ? window.location.href = "/" : "";

        const token = localStorage.getItem("token");
        // if token empty, this function will call an API to generate token, so the DB will remember who you are
        if (token == null) {
            fetch("{{ route(name: 'get-new-device-id') }}", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    localStorage.setItem("token", data.token);
                })
                .catch(error => console.error('Error:', error));
        }
        console.log("token", token)
    </script>
    @stack('scripts')
</body>

</html>
