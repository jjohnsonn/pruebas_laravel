<h1>Listado de frutas</h1>
@if(session('status'))
    <p style="background: green; color:white;">
    {{session('status')}}
    </p>
@endif
{{--
<ol>
@foreach($frutas as $fruta)
    <li>{{$fruta->nombre}}</li>
@endforeach
</ol>
--}}
<style>
.table, tr, td{
    border:1px solid;
    min-width: 200px;
    text-align: right;
}

ul{
    list-style-type: none;
    margin:0;
    padding: 0 0 30 0;
}

li a{
    width:60px;
    background-color: #dddddd;
}

</style>

<ul>
    <li><a href="/frutas/create">Crear fruta</a></li>
</ul>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Precio</td>
            <td>Fecha</td>
            <td>Acción</td>
        </tr>
    </thead>
    <tbody>
        @foreach($frutas as $fruta)
        <tr>
            <td>{{ $fruta->id }}</td>
            <td>{{ $fruta->nombre }}</td>
            <td>{{ $fruta->descripcion }}</td>
            <td>{{ $fruta->precio }}</td>
            <td>{{ $fruta->fecha }}</td>
            <!-- <td><a href="#">Ver detalle</a></td> -->
            <!-- <td><a href="{{ action('App\Http\Controllers\FrutaController@detail',['id' => $fruta->id ]) }}">Ver detalles</a></td> -->
            <td><a href="/frutas/detail/{{$fruta->id}}">Ver detalle</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
