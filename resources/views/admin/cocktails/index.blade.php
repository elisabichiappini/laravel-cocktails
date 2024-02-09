@extends('layouts.admin')

@section('content')
    <h1>Lista Cocktails</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-uppercase">Id</th>
                <th scope="col" class="text-uppercase">Cocktail</th>
                <th scope="col" class="text-uppercase">Brand</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cocktails as  $cocktail)
            <tr>
                <th>{{ $cocktail['id'] }}</th>
                <td>{{ $cocktail['name'] }}</td>
                <td>{{ $cocktail['brand'] }}</td>
                <td>//bottoni</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection