<div style="width:450px;margin:10px auto;">
	<?php echo $form->create('Usuario');?>
	<fieldset>
		<legend style="background-color:transparent;">Llene Sus Datos</legend>
		
	<?php
		echo $form->input('nombre',array('label'=>'Nombre'));
		echo $form->input('apellido',array('label'=>'Apellido'));
		echo $form->input('email',array('label'=>'Email'));
		echo $form->input('password',array('label'=>'Password', 'maxlength' => '25', 'value'=>''));
		echo $form->hidden('tipo',array('value'=>'1'));
		echo $form->input('passwordConfirm',array('label'=>'Confirmar Password', 'maxlength' => '25','type'=>'password','value'=>''));
		echo $form->input('nacimiento',array('label'=>'Fecha de Nacimiento',
											'dateFormat'=>'DMY',
											'minYear' => date('Y')-70,
											'maxYear' => date('Y')-18,
											'monthNames'=>false
										));
	?>
	</fieldset>
	
	<?php echo $form->end('Registrarse');?>
</div>