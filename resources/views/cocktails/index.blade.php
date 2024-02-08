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
    <div class="text-center mb-3">
        <h1 class="text-center py-5">Cocktails</h1>
        <a href="{{ route('cocktails.create') }}" class="btn btn-info btn-sm" role="button">Nuovo Cocktail</a>
    </div>
    <div class="container d-flex justify-content-center flex-wrap gap-3">
        @foreach ($cocktails as $cocktail)
            {{-- <li>{{ $cocktail['name'] }}</li> --}}
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2>Name: {{ $cocktail['name'] }}</h2>
                    <h3>Brand: {{ $cocktail['brand'] }}</h3>
                    <h4>Price: {{ $cocktail['price'] }}</h4>
                    <h4>Is Alcholic: {{ $cocktail['is_alcholic'] }}</h4>
                    <p>Description: {{ $cocktail['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
