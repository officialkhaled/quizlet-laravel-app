<!DOCTYPE html>
<html lang="en" class="scroll-smooth focus:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizlet App</title>

    @include('components.partials.imports')

</head>
<body class="antialiased">
@include('components.partials.header')

@auth
    @include('components.common.sidebar')
@endauth

@yield('content')

@include('components.partials.footer')
</body>
</html>
