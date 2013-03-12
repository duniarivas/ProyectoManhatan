<div id="page">
	<?php echo $form->create('Direccione');?>
	<fieldset>
		<legend>Edita Direccion</legend>
			<?php
				echo $form->hidden('Direccione.id');
				echo $form->input('direccion1');
				echo $form->input('direccion2');
				echo $form->input('ciudad');
				echo $form->input('telefono');
				echo $form->input('fax');
				echo $form->input('usuario_id',array('type'=>'hidden','value'=>$usuarioID));
				echo $form->input('paise_id',array('label'=>'Pais'));
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>

</div>