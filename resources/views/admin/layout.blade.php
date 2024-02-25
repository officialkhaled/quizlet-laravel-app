<!DOCTYPE html>
<html lang="en" class="scroll-smooth focus:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizlet App</title>

    @include('components.common.imports')

</head>
<body class="antialiased">
@include('components.common.header')

@auth
    @include('components.common.sidebar')
@endauth

<div class="min-h-screen bg-gray-100">
    @yield('content')
</div>

@include('components.common.footer')

@include('components.common.scripts')
</body>

</html>

