<?php echo $this->element('submenuItem'); ?>
<div id="page">	
	<?php echo $form->create('Imagene', array('type'=>'file'));?>
	<fieldset>
		<legend>Agregar Nueva Imagen</legend>
		<?php
			echo $form->input('fileName', array('label'=>'Imagen:', 'type'=>'file'));
			echo $form->input('item_id');
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Imagen');?>
	<!-- FIN DE FORMULARIO -->
	
	<?php echo $html->link('Listar las Imagenes', array('action'=>'index')); ?>

</div>