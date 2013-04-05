<?php echo $this->element('submenuItem'); ?>
<div id="page">
	<?php echo $form->create('Imagene', array('type'=>'file'));?>
	<fieldset>
		<legend>Agregar Nueva Imagen</legend>
		<?php
			echo $form->input('fileName', array('label'=>'Imagen:', 'type'=>'file'));
			echo $form->input('item_id');
		?>
	</fieldset>

	<?php echo $form->end('Agregar Imagen');?>
	<!-- FIN DE FORMULARIO -->

        <fieldset>

		<?php echo $html->image('list.png',
						array('alt'=>'Listar Imagenes','title'=>'Listar Imagenes',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>
        </fieldset>
</div>