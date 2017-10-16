<?php include('header.php')?>

<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
$json = file_get_contents('data/chile.json');
$regiones = json_decode($json,true);
?>

<h2>Chile: Regiones, Providencia, Comunas</h2>
<p>Primero, "pongamos en valor" a la tabla como <a href="http://www.visual-literacy.org/periodic_table/periodic_table.html">método de visualización de datos</a>. Podemos construir una tabla con consulta a un JSON y un <a href="http://php.net/manual/es/control-structures.for.php">ciclo <em>for</em></a> en PHP. Debajo de la tabla podrán encontrar la <a href="http://php.net/manual/es/function.print-r.php">impresión</a> de la información contenida en la variable que decodifica el JSON.</p>

<table class="table w-100">
	<thead class="thead-default">
		<tr>
			<th>Código</th>
			<th>Región</th>
			<th class="text-center">Provincias</th>
			<th class="text-center">Comunas</th>
		</tr>
	</thead>
	<tbody>
	<?php for($n = 0; $n < count($regiones); $n++){?>
		<tr>
			<td><?php print($regiones[$n]['region_iso_3166_2']);?></td>
			<td><?php print($regiones[$n]['region']);?></td>
			<td class="text-center"><?php echo(count($regiones[$n]['provincias']));?></td>
			<td class="text-center"><?php echo(count($regiones[$n]['comunas']));?></td>
		</tr>
	<?php };?>
	</tbody>
</table>
<hr >

<div class="alert alert-info">
	<pre><?php print_r($regiones);?></pre>
</div>

</div>
</div>
</div>
<?php include('footer.php')?>