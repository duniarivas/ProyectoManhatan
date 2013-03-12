<div id="page">
	
	<?php echo $form->create('Comentario');?>
	
	<fieldset>
		<legend>Agregar Nuevo Comentario</legend>
		<?php
			echo $form->input('comentario',array('label'=>'Comentario'));
			echo $form->input('usuario_id');
			echo $form->input('item_id');
			
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Comentarios');?>
	<!-- FIN DE FORMULARIO -->
	
	<<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Comentarios','title'=>'Listar Comentarios',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>