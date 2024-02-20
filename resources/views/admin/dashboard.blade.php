@extends('layouts.admin')

@section('content')
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="m-0">{{ __('Dashboard') }}</h3>
                    </div>
                    <div class="card-body">
                        <img src="https://www.buttalapasta.it/wp-content/uploads/2015/07/cocktail-piu-famosi.jpg"
                            class="img-fluid" alt="...">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center mb-4 mt-3">
                            <i class="fas fa-user-circle fa-4x text-primary mb-3"></i>
                            <h4 class="mb-0">{{ __('Benvenuto') }}, {{ Auth::user()->name }}!</h4>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <a href="{{ route('admin.cocktails.index') }}"
                            class="btn btn-primary btn-block">{{ __('Amministrazione') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
