<div id="page">
	<?php echo $form->create('Deseo');?>
	<fieldset>
		<legend>Edita Deseo</legend>
			<?php
				echo $form->hidden('Deseo.id');
				echo $form->input('estrella');
				echo $form->input('usuario_id');
				echo $form->input('item_id');
				
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Deseo','title'=>'Agregar Deseo',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Deseos','title'=>'Listar Deseos',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>