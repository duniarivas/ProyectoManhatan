<div id="page">
	<?php echo $form->create('Paise');?>
	<fieldset>
		<legend>Edita Pais</legend>
			<?php
				echo $form->hidden('Paise.id');
				echo $form->input('nombre');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Paise','title'=>'Agregar Paise',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Pais','title'=>'Listar Pais',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>