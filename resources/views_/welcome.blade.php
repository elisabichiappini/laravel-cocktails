<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    <!--inclusione assets con direttiva vite-->
    @vite('resources/js/app.js')
    <!--/inclusione assets con direttiva vite-->
</head>

<body>
    {{-- header --}}
    <header>
        <h1 class="text-center py-5">Cocktails</h1>
    </header>
    {{-- header --}}
    {{-- main --}}
    <div class="container d-flex justify-content-center flex-wrap gap-3">
        <a href="{{ route('cocktails.index') }}">Lista Cocktail</a>
    </div>
    {{-- main --}}

</body>

</html>
