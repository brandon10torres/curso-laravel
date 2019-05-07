@include('contacto.header', array('nombre' => $nombre))

<h1>Página de contacto {{$nombre}} {{isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'}}</h1>
{{-- SENTENCIA IF --}}
@if(is_null($edad))
	No existe la edad
@else
	Si existe la edad: {{$edad}}
@endif
<?php $numero = 4; ?>
<p>
Tabla del {{$numero}}
<p>
{{-- SENTENCIA FOR --}}
@for($i = 1; $i <= 10; $i++)
	{{$i.' x '.$numero.' = '.($i*$numero)}}<br>
@endfor
{{-- SENTENCIA WHILE --}}
<?php $j = 1;?>
@while($j <=7)
	<p>{{'Hola '.$j}}</p>
	<?php $j++;?>
@endwhile
{{-- SENTENCIA FOREACH --}}
<h1>Listado foreach</h1>
@foreach($frutas as $fruta)
	<p>{{$fruta}}</p>
@endforeach