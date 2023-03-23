<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>
<body>
    <header>
        <nav class="main-nav">
            <a href="">
                <img src="{{asset('imagini/logo.png')}}" alt="logo">
            </a>
            <nav class="links">
                <a href="#" class="active">Despre</a>
                <a href="#">Produse Metodice</a>
                <a href="#">Exemple de lucrari</a>
            </nav>
        </nav>
        <div class="home-content">
            <h1>Platforma de promovare</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In sit officiis, fuga voluptatem possimus neque voluptate modi cupiditate? Velit dolorem doloribus doloremque, saepe vel nulla beatae in cumque enim maxime.</p>
            <div class="buttons">
                <a href="#" class="register">Inscrie-te</a>
                <a href="#" class="login">Autentificare</a>
            </div>
        </div>
    </header>
    
        @yield('content')

    <footer>
        Velicu Liviu AAW1942
    </footer>
    @stack('scripts')
</body>
</html>
