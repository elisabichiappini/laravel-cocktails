<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <!--inclusione assets con direttiva vite-->
    @vite('resources/js/app.js')
    <!--/inclusione assets con direttiva vite-->
</head>

<body>
    <div class="container">
        <a href="{{ route('admin.cocktails.index') }}" class="btn btn-primary btn-sm my-3">Indietro</a>
        <form action="{{ route('admin.cocktails.update', $cocktail->id) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name', $cocktail->name) }}">
                @error('name')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand"
                    value="{{ old('brand', $cocktail->brand) }}">
                @error('brand')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    value="{{ old('price', $cocktail->price) }}">
                @error('price')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="is_alcholic" class="form-label">Is alcholic</label>
                <input type="text" class="form-control @error('is_alcholic') is-invalid @enderror" name="is_alcholic"
                    value="{{ old('is_alcholic', $cocktail->is_alcholic) }}">
                @error('is_alcholic')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div>
                    <label class="form-label">Ingredienti</label>
                </div>
                @foreach ($ingredients as $ingredient)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ingredients[]"
                            id="ingredient-{{ $ingredient->id }}" value="{{ $ingredient->id }}"
                            {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="ingredient-{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" style="height: 100px">
                    {{ old('description', $cocktail->description) }}
                </textarea>
                @error('description')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
</body>

</html>
