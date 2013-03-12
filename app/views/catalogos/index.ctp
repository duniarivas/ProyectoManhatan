<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	<p>Prendas Disponibles</p>
	<?php
		echo "<div style='float:right;margin-bottom:0px;width:100%;
							text-align:center;padding-left:5px;font-size:14px;
							font-weight:lighter;background-color:#CCCCCC'>";
		echo "<p>".
				$paginator->prev(' Anterior  ').$paginator->numbers().$paginator->next('  Siguiente').
			"</p>";
		echo "</div>";
	?>
	<hr>
	<?php $contador = 1; ?>
		<?php 
		foreach ($items as $item):
			echo "<div id='itemcatalogo'>";
				echo $item['Item']['nombre']."<hr>";
				echo $html->image($item['Imagene']['url'],array('width'=>'150px','height'=>'200px'));
				echo "Precio: ".$item['Item']['precio']."Bs.<br>";
				echo $html->link('Ver Detalle',array('action'=>'detalle',$item['Item']['id']));
				echo $this->element('rating', array('plugin' => 'rating',
                                    'model' => 'Item',
                                    'id' => $item['Item']['id']));
			echo "</div>";
		endforeach;
		?>
		
	<?php
		echo "<div style='float:right;margin-bottom:0px;width:100%;
							text-align:center;padding-left:5px;font-size:14px;
							font-weight:lighter;background-color:#CCCCCC'>";
		echo "<p>".
				$paginator->prev(' Anterior  ').$paginator->numbers().$paginator->next('  Siguiente').
			"</p>";
		echo "</div>";
	?>
</div>




