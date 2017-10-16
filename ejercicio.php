<?php include('header.php')?>

<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
$json = file_get_contents('data/chile-ejercicio.json');
$regiones = json_decode($json,true);
?>

<h2>Ejercicio</h2>
<p><strong>En duplas, modifiquen "chile-ejercicio.json"</strong> dentro de la carpeta "data", asociando las comunas a las provincias a las que pertenecen. Luego, vuelvan a construir la tabla con consulta a ese JSON. El resultado esperado es una tabla más ordenada que la de <a href="nombres.php">Nombres</a>.</p>
<p>Antes de comenzar a construir un <a href="http://php.net/manual/es/control-structures.for.php">ciclo <em>for</em></a> con PHP, se recomienda validar las modificaciones de su JSON, eso se puede hacer con servicios tales como: <a href="https://jsonformatter.curiousconcept.com/">JSON Formatter &amp; Validator</a>, <a href="https://jsonlint.com/">JSONLit</a>, <a href="https://codebeautify.org/jsonvalidator">Code Bautify</a></p>

<table class="table w-100">
	<thead class="thead-default">
		<tr>
			<th>Código</th>
			<th>Región</th>
			<th>Provincias</th>
			<th>Comunas</th>
		</tr>
	</thead>
	<tbody>
	<?php for($n = 0; $n < count($regiones); $n++){?>
		<tr>
			<td><?php print($regiones[$n]['region_iso_3166_2']);?></td>
			<td><?php print($regiones[$n]['region']);?></td>
			<td>
				<?php for($p = 0; $p < count($regiones[$n]['provincias']); $p++){?>
					<?php print($regiones[$n]['provincias'][$p]);?><span>, </span>
				<?php }?>
			</td>
			<td>
				<?php for($c = 0; $c < count($regiones[$n]['comunas']); $c++){?>
					<?php print($regiones[$n]['comunas'][$c]['name']);?><span>, </span>
				<?php }?>
			</td>
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