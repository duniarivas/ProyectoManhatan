<div id="page">
	
	<?php echo $form->create('Deseo');?>
	
	<fieldset>
		<legend>Agregar Nuevo Deseo</legend>
		
	<?php
		echo $form->input('estrella',array('label'=>'Estrella'));
		echo $form->input('usuario_id');
		echo $form->input('item_id');
	?>
	</fieldset>
	
	<?php echo $form->end('Agregar Deseo');?>
	
	
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Deseos','title'=>'Listar Deseos',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>

</div>