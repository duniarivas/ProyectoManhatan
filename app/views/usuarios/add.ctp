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
    
    <fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Usuario','title'=>'Listar Usuario',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
    </fieldset>

</div>