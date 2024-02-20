@extends('layouts.admin')

@section('content')
    <h1 class="text-center pt-2">Lista Cocktails</h1>
    <a href="{{ route('admin.cocktails.create') }}"><i class="fa-solid fa-plus fa-lg fa-fw"></i></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-uppercase">Id</th>
                <th scope="col" class="text-uppercase">Cocktail</th>
                <th scope="col" class="text-uppercase">Brand</th>
                <th scope="col" class="text-end"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cocktails as $cocktail)
                <tr>
                    <th>{{ $cocktail['id'] }}</th>
                    <td>{{ $cocktail['name'] }}</td>
                    <td>{{ $cocktail['brand'] }}</td>
                    <td class="text-end">
                        <a href="{{ route('admin.cocktails.show', $cocktail) }}" class="btn btn-info btn-sm"><i
                                class="fa-regular fa-eye me-1" style="color:#fff"></i>Show</a>
                        <a href="{{ route('admin.cocktails.edit', $cocktail) }}" class="btn btn-primary btn-sm"><i
                                class="fa-solid fa-pen-to-square me-1"></i>Edit</a>
                        <form action="{{ route('admin.cocktails.destroy', $cocktail) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="Delete" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
