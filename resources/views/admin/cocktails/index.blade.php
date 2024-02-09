@extends('layouts.admin')

@section('content')
    <h1>Lista Cocktails</h1>
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
            @foreach ($cocktails as  $cocktail)
            <tr>
                <th>{{ $cocktail['id'] }}</th>
                <td>{{ $cocktail['name'] }}</td>
                <td>{{ $cocktail['brand'] }}</td>
                <td class="text-end">
                    <a href="" class="btn btn-info">Show</a>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection