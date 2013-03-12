<div id="page">
	
	<?php echo $form->create('Paise');?>
	
	<fieldset>
		<legend>Agregar Nuevo Pa&iacute;s</legend>
		
	<?php
		echo $form->input('nombre',array('label'=>'Nombre'));
	?>
	</fieldset>
	
	<?php echo $form->end('Agregar Pais');?>
	
	
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Pais','title'=>'Listar Pais',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>

</div>