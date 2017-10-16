<?php include('header.php')?>

<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
$json = file_get_contents('data/chile.json');
$regiones = json_decode($json,true);
?>

<h2>Chile: Regiones, Providencia, Comunas</h2>
<p>Podemos modificar lo que se muestra en la tabla si es que modificamos la consulta hecha con PHP. Si miran debajo de la tabla, podrán ver que se imprime exactamente la misma información. Tanto en <a href="index.php">Portada</a> como aquí, en Nombres, estoy consultando "chile.json" dentro de la carpeta "data".</p>

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