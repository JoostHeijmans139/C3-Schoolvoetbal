<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>

    <header>
        <div class="headerLogo">
            <a href="/"><img src="{{ asset('img/logo.png') }}" class="logo"></a>
        </div>
        <nav>
            <div class="loginButton">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" class="loginText"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Uitloggen') }}
                        </x-dropdown-link>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="loginText">Inloggen</a>
                @endguest
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

</body>

</html>
