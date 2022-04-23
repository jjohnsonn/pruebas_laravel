@include('includes.header')
<h1>{{$cartelera}} {{$fecha}}</h1>
<hr/>
<h2>{{$peliculas}} :</h2>
<br/>
@foreach($listaditos as $listados)
<ol>
    <li>{{$listados}}</li>
</ol>
@endforeach

@include('includes.footer')