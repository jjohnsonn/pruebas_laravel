@include('includes.header')
<!-- IMPRIMIR POR PANTALLA -->
<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{date('d-m-Y')}}</p>

<!-- COMENTARIOS -->
<!-- Esto es un comentario -->
<?php
//Esto es un comentario
?>
{{-- ESTO ES UN COMENTARIO --}}

<!-- MOSTRAR SI EXISTE -->
<?= isset($director) ? $director: 'No hay director' ?>
{{ $titulo or 'No hay ningún director'}}

<!-- ESTRUCTURAS DE CONTROL -->
<!-- CONDICIONALES -->

<hr/>

@if($titulo && count($listado) >= 5)
    <h3>Existe el titulo y es "{{$titulo}}" y el listado es mayor a 5</h3>

@elseif($titulo)
    <h2>El titulo existe y el listado no es mayor a 5</h2>

@else
    <h3>La condición no se ha cumplido</h3>

@endif

<!-- BUCLES -->
<hr/>

@for($i =1; $i <= 5 ; $i++ )
    <p>El numero es: {{$i}}</p>
@endfor


<hr/>

<?php $contador=1 ?>
@while($contador < 10)
    @if($contador % 2 == 0)
        <p>Numero par: {{$contador}}</p>
    @endif

    <?php $contador++ ?>
@endwhile

<hr/>

<?php $contador2=1 ?>
@foreach($listado as $listados)
    <p>Pelicula {{$contador2}}: {{$listados}}</p>
    <?php $contador2++ ?>
@endforeach

@include('includes.footer')