<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset("css/main.css") }}" rel="stylesheet">
    <title>Home</title>
</head>

<body>

    <header>
        <div class="headerLogo">
            <p>placeholder</p>
        </div>
        <nav>
            <div class="loginButton">
                <p>login</p>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

</body>

</html>
