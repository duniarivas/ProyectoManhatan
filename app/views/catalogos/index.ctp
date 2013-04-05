<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	<p>Prendas Disponibles</p>
	<?php
		echo "<div class='paginador' style='margin-bottom:0px;width:100%;
						    text-align:center;padding-left:5px;font-size:14px;
						    font-weight:lighter;background-color:#CCCCCC'>";
		echo "<p>".
				$paginator->prev(' Anterior  ').$paginator->numbers().$paginator->next('  Siguiente').
			"</p>";
		echo "</div>";
	?>
	<hr>
        <div id="calatogo" style="margin-top:10px; display:table; width:100%;">
			<?php
                   $contador = 1;
                   $columna = 0;
				   
                foreach ($items as $item):
                                if ($columna == 0 )
                                    echo "<div class='fila'>";
                    echo "<div class='itemcatalogo'>";
                        echo $item['Item']['nombre']."<hr>";
                        echo $html->link( $html->image($item['Imagene']['url'],array('width'=>'150px','height'=>'200px'))
										,array('action'=>'detalle',$item['Item']['id'])
										,array('escape'=>false));
                        echo "<br/>Precio: ".$item['Item']['precio']."Bs.<br>";
                        echo $html->link('Ver Detalle',array('action'=>'detalle',$item['Item']['id']));
                        echo $this->element('rating', array('plugin' => 'rating',
                                            'model' => 'Item',
                                            'id' => $item['Item']['id']));
                    echo "</div>";
                                if ($columna == 2 )
                                    echo "</div>";
                                $columna++;
                                if ($columna == 3)
                                    $columna = 0;
                endforeach;
			?>
			</div>
        </div>
        <?php
		echo "<div class='paginador' style='margin-bottom:0px;width:100%; text-align:center;padding-left:5px;font-size:14px; font-weight:lighter;background-color:#CCCCCC'>";
		echo "<p>".
				$paginator->prev(' Anterior  ').$paginator->numbers().$paginator->next('  Siguiente').
			"</p>";
		echo "</div>";
	?>
</div>
