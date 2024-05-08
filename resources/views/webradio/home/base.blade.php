<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header class="p-2 bg-basic_white_color flex justify-between items-center" >
        <div class="size-14 shadow-md" >
            <img src="{{asset('images/rtulogo.png')}}" class="size-full" alt="RTU logo">
        </div>
       <!--  <nav class="bg-green-400" >
            <a href="">Accueil</a>
            <a href="">Services</a>
            <a href="">Grille des programmes</a>
            <a href="">Grille des prix</a>
            <a href="">Podcast</a>
        </nav> -->
        <div class="size-8 bg-basic_primary_color" ></div>
    </header>

    @yield('content')
</body>
</html>