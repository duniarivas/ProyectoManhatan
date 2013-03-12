<div id="page">
	
	<?php echo $form->create('Direccione');?>
	
	<fieldset>
		<legend>Agregar Nueva Direccion</legend>
		<?php
			echo $form->input('direccion1',array('label'=>'Direccion1'));
			echo $form->input('direccion2',array('label'=>'Direccion2'));
			echo $form->input('ciudad',array('label'=>'Ciudad'));
			echo $form->input('telefono',array('label'=>'Telefono'));
			echo $form->input('fax',array('label'=>'Fax'));
			echo $form->input('usuario_id',array('type'=>'hidden','value'=>$usuarioID));
			echo $form->input('paise_id', array('label'=>'Pais'));
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Direcciones');?>
	<!-- FIN DE FORMULARIO -->
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Direcciones','title'=>'Listar Direcciones',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>