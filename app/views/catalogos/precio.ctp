<h1>Prendas Disponibles</h1>
<hr>
<?php $contador = 1; ?>
<table>
	<?php 
	foreach ($items as $item):
		echo $item['Item']['nombre']."<br>";
		echo $item['Item']['precio']."Bs.";
		for($i=0;$i<$item['Item']['estrella'];$i++){
			echo " * ";
		}
		echo "<hr>";
	endforeach;
	?>
</table>





