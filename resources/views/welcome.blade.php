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
    <h1>Cocktails</h1>
    <div class="container d-flex">
        @foreach ($cocktails as $cocktail)
            {{-- <li>{{ $cocktail['name'] }}</li> --}}
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    {{ $cocktail['name'] }}
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
