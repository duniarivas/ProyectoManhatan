<div id="page">
	<?php echo $form->create('Usuario');?>
	
	<fieldset>
		<legend>Agregar Nuevo Usuario</legend>
		
	<?php
		echo $form->input('nombre',array('label'=>'Nombre'));
		echo $form->input('apellido',array('label'=>'Apellido'));
		echo $form->input('email',array('label'=>'Email'));
		echo $form->input('password',array('label'=>'Password'));
		echo $form->input('emailverficado',array('label'=>'Email Verificado'));
		echo $form->input('nacimiento',array('label'=>'Fecha de Nacimiento',
											'dateFormat'=>'DMY',
											'minYear' => date('Y')-70,
											'maxYear' => date('Y')-18
										));
		echo $form->input('tipo',array('label'=>'Tipo de Usuario'));
	?>
	</fieldset>
	
	<?php echo $form->end('Agregar Usuario');?>
	
	
	<?php echo $html->link('Listar Todos Los Usuarios', array('action'=>'index')); ?>

</div>