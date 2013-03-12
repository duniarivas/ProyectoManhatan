<div id="page">
	<?php echo $form->create('Caracteristica');?>
	<fieldset>
		<legend>Edita Caracteristica</legend>
			<?php
				echo $form->hidden('Caracteristica.id');
				echo $form->input('talla');
				echo $form->input('color');
				echo $form->input('stock');
				echo $form->input('item_id');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<?php echo $html->link('Listar todas las Caracteristicas', array('action'=>'index')); ?><br />
	<?php echo $html->link('Agregar Nueva Caracteristicas', array('action'=>'add')); ?>
</div>