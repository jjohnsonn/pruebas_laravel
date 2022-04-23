<h1>Formulario</h1>

<form method="post" action="{{ action('App\Http\Controllers\PeliculaController@recibir')}}">
    {{csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" />

    <br/>
    <label for="email">Email</label>
    <input type="email" name="email" />
    <br/>
    <input type="submit" value="Enviar" />
</form>