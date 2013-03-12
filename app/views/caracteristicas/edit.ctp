<div id="page">
	<?php echo $form->create('Caracteristica');?>
	<fieldset>
		<legend>Edita Caracteristica</legend>
			<?php
				echo $form->hidden('Caracteristica.id');
				echo $form->input('talla');
				echo $form->input('color');
				echo $form->input('stock');
				echo $form->input('item_id');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<hr>
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Caracteristica','title'=>'Agregar Caracteristica',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Caracteristicas','title'=>'Listar Caracteristicas',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>