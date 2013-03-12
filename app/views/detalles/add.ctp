<div id="page">
	
	<?php echo $form->create('Detalle');?>
	
	<fieldset>
		<legend>Agregar Nuevo Detalle</legend>
		<?php
			echo $form->input('cantidad',array('label'=>'Cantidad'));
			echo $form->input('precio',array('label'=>'Precio'));
			echo $form->input('compra_id');
			echo $form->input('caracteristica_id');
			
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Detalles');?>
	<!-- FIN DE FORMULARIO -->
	
	fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Detalles','title'=>'Listar Detalles',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>