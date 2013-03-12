<div id="page">
	<?php echo $form->create('Usuario');?>
	<fieldset>
		<legend>Edita Usuario</legend>
			<?php
				echo $form->hidden('Usuario.id');
				echo $form->input('nombre');
				echo $form->input('apellido');
				echo $form->input('email');
				echo $form->input('password');
				echo $form->input('emailverificado');
				echo $form->input('nacimiento');
				echo $form->input('tipo');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<?php echo $html->link('Listar todos los usuario', array('action'=>'index')); ?><br />
	<?php echo $html->link('Agregar Nuevo usuario', array('action'=>'add')); ?>
</div>