<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
		<?php
			$i=0;
			foreach($items as $item):
				if($i==0){
					echo "<h3 id='titulo'>".$item['Item']['nombre']."</h3>";
					echo $this->element('rating', array('plugin' => 'rating',
                                    'model' => 'Item',
                                    'id' => $item['Item']['id']));
					echo "<br>";
					if($talla == null){
						echo "Eliga Una Talla Para Comprar:<br>";
					}
					echo "Tallas: ";
					foreach($caracteristicas as $caracteristica){
						if($talla != $caracteristica['Caracteristica']['talla']) {
							// Crear Link de Talla
							echo "<div style='display:inline;'>";
							echo " ".$html->link($caracteristica['Caracteristica']['talla'],array(
											'controller'=>'catalogos',
											'action'=>'detalle',
											$item['Item']['id'],
											$caracteristica['Caracteristica']['talla'],
											)
									);
							echo "</div>";
						} else {
							// Seleccionar Talla
							echo "<div style='color:#FF0000; display:inline; font-weight:bold;'>";
							echo " ".$caracteristica['Caracteristica']['talla'];
							echo "</div>";
							
							// Crear Boton PayPal
							echo "<div id='paypalbox'>";
									$codigo	= "Item#".$item['Item']['id'];
									$nombre = " ".$item['Item']['nombre']." ";
									$tamano = " Talla: ".$talla;
									$precio = $item['Item']['precio'];
									echo $paypal->button('Ver Carrito', array('test'=>true,
															'type'=>'viewcart')); 
									echo $paypal->button('Agregar A Carrito', array('test'=>true,
															'type'=>'addtocart', 'amount' => $precio, 
															'item_name' => $codigo.$nombre.$tamano)); 
									echo $paypal->button('Compra Directa', array('test'=>true,
															'amount' => $precio, 
															'item_name' => $codigo.$nombre.$tamano)); 
								if( $user==null){
									echo "Debe ";
									echo $this->Html->link('Registrarse','/usuarios/registro');
									echo " o "; 
									echo $this->Html->link('Iniciar Sesion','/usuarios/login');
									echo " Para Agregar Este Item A Su Cajita de Deseos";
								} else {
									echo $form->create('Deseo', array('action'=>'add'));
									echo $form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));
									echo $form->input('item_id',array('type'=>'hidden','value'=>$idItem));
									echo $form->input('talla',array('type'=>'hidden','value'=>$talla));
									echo $form->end('Lo Deseo!');
								}
							echo "</div>";
						}
					}
					echo "<hr><br>";
				}
				
				// Empezar cargar imagenes
				echo $html->image($item['Imagene']['url'],array('width'=>'150px','height'=>'200px'));
				
				if($i==0){
					echo "<br><br> Descripcion:<hr><br>";
					echo $item['Item']['descripcion'];
				}
				$i++;
				echo "<br><br><br>";
			endforeach;
		?>
		
		<?php
			// Comentarios
			echo "<br>Comentarios:<hr><hr>";
			foreach($comentarios as $comentario):
				echo "<br>".$comentario['Usuario']['nombre']." ".$comentario['Usuario']['apellido']." dice: ";
				echo "<br><p style='font:Arial, Helvetica, sans-serif;font-size:10px;font-weight:lighter;'>".
								$comentario['Comentario']['created']."</p>";
				echo "<br><p style='font:Arial, Helvetica, sans-serif;font-size:12px;font-weight:lighter;background-color:#CCCCCC'>".
								$comentario['Comentario']['comentario']."</p><br><hr>";
			endforeach;
				echo "<p style='text-align:center;font-size:12px;font-weight:lighter;background-color:#CCCCCC'>".
						$paginator->numbers().
					  "</p><hr>";
			if( $user==null){
				echo "<br><hr><hr><br>Debe ";
				echo $this->Html->link('Registrarse','/usuarios/registro');
				echo " o "; 
				echo $this->Html->link('Iniciar Sesion','/usuarios/login');
				echo " Para Realizar Comentarios<br><br>";
			} else {
				echo $form->create('Comentario', array('action'=>'add'));
				echo "<fieldset style='width:100%'>";
					echo $form->input('comentario',array('label'=>'Comentario:','type'=>'textarea','maxlength'=>'200'));
					echo $form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));
					echo $form->input('item_id',array('type'=>'hidden','value'=>$idItem));
					echo $form->end('Agregar Comentarios');
				echo "</fieldset>";
			}
		?>
</div>