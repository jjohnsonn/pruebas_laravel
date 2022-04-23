<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>
    @section('header')
        <div class="header">
            <h1>Header de la pagina</h1>
            <hr/>
        </div>
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        <div class="footer">
            <hr/>
            <h2>Footer de la pagina</h2>
        </div>
    @show
</body>
</html>