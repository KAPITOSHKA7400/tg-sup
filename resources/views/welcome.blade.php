@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-warning">Добро пожаловать в Telsup!</h1>
        <p class="lead">Ваша платформа для быстрых решений, обмена знаниями и общения.</p>
        @auth
            <div class="alert alert-success mt-4">
                Вы вошли как <b>{{ Auth::user()->login }}</b>.
            </div>
        @endauth
        <!-- Здесь можешь добавить любой контент главной -->
    </div>
@endsection
