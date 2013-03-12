<div id="page">
	<?php echo $form->create('Detalle');?>
	<fieldset>
		<legend>Edita Detalle</legend>
			<?php
				echo $form->hidden('Detalle.id');
				echo $form->input('cantidad');
				echo $form->input('precio');
				echo $form->input('compra_id');
				echo $form->input('caracteristica_id');

			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Detalle','title'=>'Agregar Detalle',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Detalles','title'=>'Listar Detalles',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>