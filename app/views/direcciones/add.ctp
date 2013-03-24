<div id="page">
	
	<?php echo $form->create('Direccione');?>
	
	<fieldset>
		<legend>Agregar Nueva Direccion</legend>
		<?php
			echo $form->input('direccion1',array('label'=>'Direccion1','placeholder'=>'Linea 1 de Direccion'));
			echo $form->input('direccion2',array('label'=>'Direccion2','placeholder'=>'Linea 1 de Direccion'));
			echo $form->input('ciudad',array('label'=>'Ciudad','placeholder'=>'Ciudad de Procedencia'));
			echo $form->input('telefono',array('label'=>'Telefono','placeholder'=>'Numero Telefonico'));
			echo $form->input('fax',array('label'=>'Fax','placeholder'=>'Numero de Fax'));
			echo $form->input('usuario_id',array('type'=>'hidden','value'=>$usuarioID));
			echo $form->input('paise_id', array('label'=>'Pais'));
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Direcciones');?>
	<!-- FIN DE FORMULARIO -->
        <?php if ($usuarioTipo == 0) : ?>
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Direcciones','title'=>'Listar Direcciones',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
        <?php endif; ?>
</div>