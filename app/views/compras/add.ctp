<div id="page">
	
	<?php echo $form->create('Compra');?>
	
	<fieldset>
		<legend>Agregar Nueva Compra</legend>
		<?php
			echo $form->input('costo',array('label'=>'Costo'));
			echo $form->input('costoenvio',array('label'=>'Costo Envio'));
			echo $form->input('costototal',array('label'=>'Costo Total'));
			echo $form->input('fechaenvio',array('label'=>'Fecha de Envio'));
			echo $form->input('usuario_id');
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar una Compra');?>
	<!-- FIN DE FORMULARIO -->
	
	
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Compras','title'=>'Listar Compras',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>