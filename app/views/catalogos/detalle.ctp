<style>
    .magnify{
        width:150px;
        position: relative;
    }
    .large {
	width: 180px; height: 180px;
	position: absolute;
	border-radius: 100%;
	/*Multiple box shadows to achieve the glass effect*/
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	display: none;
    }
</style>
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
				
                                ?>
				<div class="magnify">
                                    <div class="large"></div>
				<?php
                                    echo $html->image($item['Imagene']['url'],array('width'=>'150px','id'=>'prenda','class'=>'small'));
                                ?>
                                </div>
                                <?php
				
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
<script>
    $(document).ready(function(){

        console.log($('#prenda').attr('src'));
        $('.large').css("background", "url("+$('#prenda').attr('src')+") no-repeat");
	var native_width = 0;
	var native_height = 0;

	//Now the mousemove function
	$(".magnify").mousemove(function(e){
		//When the user hovers on the image, the script will first calculate
		//the native dimensions if they don't exist. Only after the native dimensions
		//are available, the script will show the zoomed version.
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small").attr("src");
                        
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			//x/y coordinates of the mouse
			//This is the position of .magnify with respect to the document.
			var magnify_offset = $(this).offset();
			//We will deduct the positions of .magnify from the mouse positions with
			//respect to the document to get the mouse positions with respect to the 
			//container(.magnify)
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			//Finally the code to fade out the glass if the mouse is outside the container
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large").fadeIn(250);
			}
			else
			{
				$(".large").fadeOut(250);
			}
			if($(".large").is(":visible"))
			{
				//The background position of .large will be changed according to the position
				//of the mouse over the .small image. So we will get the ratio of the pixel
				//under the mouse pointer with respect to the image and use that to position the 
				//large image inside the magnifying glass
				var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
				var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				
                                var px = mx - $(".large").width()/2;
				var py = my - $(".large").height()/2;
				//Time to move the magnifying glass with the mouse
                                $(".large").css({left: px, top: py, backgroundPosition: bgp});
                        }
                }
        })
    });
</script>
