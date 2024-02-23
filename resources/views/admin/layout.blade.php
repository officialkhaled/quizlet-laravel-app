<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizlet App</title>

    @include('components.partials.imports')

</head>
<body class="antialiased">
@include('components.partials.header')

@yield('content')

@include('components.partials.footer')
</body>
</html>
