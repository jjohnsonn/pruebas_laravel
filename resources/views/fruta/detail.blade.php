<div>
<h1>Detalle de la fruta</h1>
<hr/>

<style>
.table, tr, td{
    border:1px solid;
    min-width: 200px;
    text-align: left;
}
body{
    background-color: antiquewhite;
}
</style>

<table>
    <thead>
        <tr>
            <td style="text-align:center;" colspan="2">Información fruta</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Id</td>
            <td>{{$frutalist->id}}</td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>{{$frutalist->nombre}}</td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td>{{$frutalist->descripcion}}</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>{{$frutalist->precio}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$frutalist->fecha}}</td>
        </tr>
    </tbody>
</table>
<hr/>
<a href="/frutas/delete/{{$frutalist->id}}">Eliminar</a><br/>
<a href="/frutas/edit/{{$frutalist->id}}">Actualizar fruta</a><br/>


<hr/>
<a href="/frutas/index">Volver al index</a>

</div>