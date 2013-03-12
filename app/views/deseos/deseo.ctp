<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	<?php echo $html->image('dreambox.png'); ?>
	<div id="dreambox">
	<?php
		if( $user==null){
			echo "Debe ";
			echo $this->Html->link('Registrarse','/usuarios/registro');
			echo " o "; 
			echo $this->Html->link('Iniciar Sesion','/usuarios/login');
			echo " Para Agregar Este Item A Su Cajita de Deseos";
		} else {
		
			if($deseos !=null){
				$ponerTitulo = true;
				
				foreach($deseos as $deseo){
					//Poner Titulos
					if($ponerTitulo){
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
									$html->link('Ver',array('controller'=>'catalogos',
																'action'=>'detalle',
																$deseo['Item']['id'],
																$deseo['Deseo']['talla']))
									." ".
									$html->link('Eliminar',array('controller'=>'deseos',
																'action'=>'delete',
																$deseo['Deseo']['id']))
								)
							);
				} // Fin Foreach
				
			}// Fin If
			echo "</table>";
		}
		?>
	</div>
	
	<hr>
	<?php
		if($user!=null){
			echo "<p style='text-align:center;padding-left:5px;font-size:14px;font-weight:lighter;background-color:#CCCCCC'>".
					$paginator->prev(' Anterior ').$paginator->numbers().$paginator->next(' Siguiente').
				 "</p>";
		}
	?>
	<hr>
</div>
