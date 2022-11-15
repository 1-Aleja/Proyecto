@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <a href="{{ route('shop') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Listar juguetes</a>
                    </div>

                    <div>
                        <a href="{{ route('create-toy') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ingresar juguete</a>
                    </div>
                    <div>
                        <a href="{{ route('register/users') }}" class="ml-4 text-sm text-gray-700 dark:text-danger-500 underline">Registrarse</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
