<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
    </script>
    <script src={{ asset('js/basket_handler.js') }}></script>
</head>
<body>
<div class="container-fluid p-0">
    <div class="top_bar">
        <p id="logo">BookShelf</p>
        @if (Route::has('login'))
            <div class="nav">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"
                       id="nav_login">LOG IN</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                           id="nav_register">REGISTER</a>
                    @endif
                @endauth

            </div>
        @endif
    </div>
    <div id="books">
        @foreach($books as $book)
            <div id="book">
                <a href="{{route('books', $book->id)}}" id="book_a">
                    <img src="{{ asset("$book->image") }}" id="book_image">
                    <p id="book_name">{{ $book->name }}</p>
                    <p id="book_description">{{ $book->description }}</p>
                    <p id="book_author">~{{ $book->author }}</p>
                    @auth
                        <a href="{{route('basket',$book->id)}}" class="basket_handler" data-id="{{$book->id}}">BUY</a>
                    @endauth
                    @guest
                        <a href="/login">BUY</a>
                    @endguest
                </a>
            </div>
        @endforeach
    </div>
</div>
</div>
</div>
</body>
</html>