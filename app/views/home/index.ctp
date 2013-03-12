<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	<!-- CAROUSEL DE IMAGENES-->
	<div id = "carousel1"> 
	<?php
		foreach($carousel as $item){
			echo $this->Html->image($item['Imagene']['url'], array(
							'class'=>'cloudcarousel',
							'alt'=>'Precio: '.$item['Item']['precio'].'Bs.',
							'title'=>$item['Item']['nombre']
								));
		}
	?>
	<!-- Define left and right buttons. -->
	<input id="left-but"  type="button" value="" />
	<input id="right-but" type="button" value="" />
	
	<!-- Define elements to accept the alt and title text from the images. -->
	<p id="title-text"></p>
	<p id="alt-text"></p>
	<!-- FIN CAROUSEL --> 
	</div>
	
	<!-- Carousel Horizontal -->
	<br>
	<p>Los &uacute;ltimos 25 &iacute;tems:</p>
	<ul id="mycarousel" class="jcarousel-skin-tango">
		<?php
			foreach($ultimos as $ultimo){
				echo "<li>".
					$this->Html->image($ultimo['Imagene']['url'],array('width'=>'75','height'=>'75',
										'alt'=>$ultimo['Item']['nombre'],'title'=>$ultimo['Item']['nombre'])).
						"</li>";
			}
		?>
	</ul>
	<!-- Carousel Horizontal -->
</div>