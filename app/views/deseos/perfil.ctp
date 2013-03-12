<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	<br>
	<h2>Perfil</h2>
	<br>
		<?php
		if($deseos !=null){
			$ponerTitulo = true;
			
			foreach($deseos as $deseo){
				//Poner Titulos
				if($ponerTitulo){
					echo "Nombre: ". 
							$deseo['Usuario']['nombre'].
							" ".
							$deseo['Usuario']['apellido'];
					echo "<br>";
					echo "<hr>";
					echo "<table>";
					echo $html->tableHeaders(
							array('Item Deseado','Precio','Talla','Accion')
							);
					$ponerTitulo = false;
				}
				// Llenar Celdas
				echo $html->tableCells(
							array(
								$deseo['Item']['nombre'],
								$deseo['Item']['precio']."Bs.",
								$deseo['Deseo']['talla'],
								$html->link('Comprar',array('controller'=>'catalogos',
															'action'=>'detalle',
															$deseo['Item']['id'],
															$deseo['Deseo']['talla']))
							)
						);
			}
		}
		echo "</table>";
		?>	
	
	<hr>
	<?php
		echo "<p style='text-align:center;font-size:12px;font-weight:lighter;background-color:#CCCCCC'>".
				$paginator->numbers().
			 "</p>";
	?>
	<hr>
</div>