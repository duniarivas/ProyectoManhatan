<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	<br>
	<h2>Mis Deseos</h2>
	<br>
		<?php
		if($deseos !=null){
			$ponerTitulo = true;
			foreach($deseos as $deseo){
                                
				//Poner Titulos
				if($ponerTitulo){
                                        if ( !empty($direcciones) ){
                                            $listo = false;
                                            echo "<p style='font-size:16px;cursor:pointer;' id='mostrar_ocultar'>+ Mostrar Direcci&oacute;n</p>";
                                            foreach($direcciones as $direccion){
                                                    if (!$listo){
                                                        echo "<fieldset id='direccion' style='display:none;'>";
                                                        echo "Direccion 1: ".$direccion['direccion1'];
                                                        echo "<br/>";
                                                        echo "Direccion 2: ".$direccion['direccion2'];
                                                        echo "<br/>";
                                                        echo "Telefono:</small>   ".$direccion['telefono'];
                                                        echo "<br/>";
                                                        echo "Fax: ".$direccion['fax'];
                                                        echo "<br/>";
                                                        echo "<Ciudad: ".$direccion['ciudad'];
                                                        echo "<br/>";
                                                        echo "</fieldset>";
                                                    }
                                                    $listo = true;
                                            }
                                        //Terminar luego del script } end if
                                        ?>
        <script>
    $('#mostrar_ocultar').click(function(){
        if($("#direccion").is(":visible")){
            $('#mostrar_ocultar').html('+ Mostrar Direcci&oacute;n');
            $("#direccion").slideUp('1000');
        } else {
            $('#mostrar_ocultar').html('- Ocultar Direcci&oacute;n');
            $("#direccion").slideDown('1000');
        }
    });
</script>
                                        <?php
                                        }
                                        //Gravatar
                                        $size = 250;
                                        $email = $deseo['Usuario']['email'];
                                        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?size=".$size;
                                        echo "<span style='width:100%; font-size:24px; display:inline-block; text-align:center;'>".$deseo['Usuario']['nombre']." ".$deseo['Usuario']['apellido']."</span>";
                                        echo "<img class='gravatarCentro250' src='".$grav_url."' title='Imagen desde Gravatar.com'/>";
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
		"</p>";?>
	<hr>
</div>