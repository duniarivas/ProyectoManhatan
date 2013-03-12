<?php echo $this->element('submenuUsuario'); ?>
	<?php echo $form->create('Usuario');?>
	
	<fieldset>
		<legend>
			Env&iacute;ar Mensaje de Correo Electr&oacute;nico A Todos Los Usuarios
		</legend>
	
		<?php
			echo $form->input('titulo', array('label'=>'Titulo de Mensaje'));
			echo $form->input('contenido',array('label'=>'Mensaje',
												'type'=>'textarea'
												)
						);
		?>
	</fieldset>
	
	<?php echo $form->end('Enviar Email');?>
	
	<hr>
	
</div>