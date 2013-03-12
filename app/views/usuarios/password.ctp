<div style="width:350px; margin:10px auto;">
	
	<?php echo $form->create('Usuario');?>
	
	<fieldset>
		<legend>Cambiar Password</legend>
		
	<?php
		echo $form->hidden('Usuario.id');
		echo $form->hidden('nombre');
		echo $form->hidden('apellido');
		echo $form->hidden('email');
		echo $form->hidden('emailverificado');
		echo $form->hidden('tipo');
		echo $form->input('passwordActual', array('type'=>'password', 'maxlength' => '25', 'value'=>''));
		echo $form->input('password',array('label'=>'Password', 'maxlength' => '25', 'value'=>''));
		echo $form->input('passwordConfirm',array('label'=>'Confirmar Password', 'maxlength' => '25','type'=>'password','value'=>''));
	?>
	</fieldset>
	
	<?php echo $form->end('Cambiar Password');?>

</div>