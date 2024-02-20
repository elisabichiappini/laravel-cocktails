@extends('layouts.admin')

@section('content')
    <div class="text-center mb-3">
        <h1 class="text-center py-5">Cocktails</h1>
    </div>
    <div class="container d-flex justify-content-center flex-wrap gap-3">
        <div class="card border border-dark" style="width: 18rem;">
            <div class="card-body">
                <h2>{{ $cocktail['name'] }}</h2>
                <h3>{{ $cocktail['brand'] }}</h3>
                <h4>{{ $cocktail['price'] }} €</h4>
                @if ($cocktail['is_alcholic'] == 0)
                    <h6>Not alcholic</h6>
                @else
                    <h6>Alcholic</h6>
                @endif
                <p>{{ $cocktail['description'] }}</p>
                <h5>Ingredients</h5>
                <ul class="list-unstyled">
                    @foreach ($cocktail->ingredients as $ingredient)
                        <li>{{ $ingredient->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center my-3">
        <a href="{{ route('admin.cocktails.index') }}" class="btn btn-info btn-sm" role="button"><i
                class="fa-solid fa-arrow-left me-1"></i>Indietro</a>
    </div>
@endsection
