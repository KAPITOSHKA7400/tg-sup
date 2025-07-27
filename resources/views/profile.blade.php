@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white dark:bg-gray-900 p-8 rounded-xl shadow">
        <h1 class="text-3xl font-bold mb-4">Профиль пользователя</h1>
        <div class="mb-3">
            <span class="text-gray-700 dark:text-gray-200 font-semibold">Логин:</span> {{ Auth::user()->login }}
        </div>
        <div class="mb-3">
            <span class="text-gray-700 dark:text-gray-200 font-semibold">Email:</span> {{ Auth::user()->email }}
        </div>
        <div class="mb-6">
            <span class="text-gray-700 dark:text-gray-200 font-semibold">Ваша роль:</span>
            <span class="uppercase px-2 py-1 rounded
            @if(Auth::user()->role == 'admin') bg-red-100 text-red-600 @endif
            @if(Auth::user()->role == 'moder') bg-blue-100 text-blue-600 @endif
            @if(Auth::user()->role == 'user_des') bg-green-100 text-green-600 @endif
            @if(Auth::user()->role == 'user_dev') bg-purple-100 text-purple-600 @endif
            @if(Auth::user()->role == 'partner') bg-yellow-100 text-yellow-600 @endif
        ">
            {{ Auth::user()->role }}
        </span>
        </div>

        @if(Auth::user()->role == 'admin')
            <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-4">
                <strong>Это панель администратора.</strong> Полный доступ к управлению системой.
            </div>
        @elseif(Auth::user()->role == 'moder')
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-4">
                <strong>Это панель модератора.</strong> Доступ к модерированию контента.
            </div>
        @elseif(Auth::user()->role == 'user_des')
            <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-4">
                <strong>Это панель дизайнера.</strong> Доступ к своим задачам и макетам.
            </div>
        @elseif(Auth::user()->role == 'user_dev')
            <div class="bg-purple-50 border-l-4 border-purple-400 p-4 mb-4">
                <strong>Это панель разработчика.</strong> Доступ к задачам и багам.
            </div>
        @elseif(Auth::user()->role == 'partner')
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                <strong>Это панель партнёра.</strong> Доступ к партнёрским инструментам.
            </div>
        @else
            <div class="bg-gray-50 border-l-4 border-gray-400 p-4 mb-4">
                <strong>Нет информации о вашей роли.</strong>
            </div>
        @endif
    </div>
@endsection
