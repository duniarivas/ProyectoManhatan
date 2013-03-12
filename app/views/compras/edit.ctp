<div id="page">
	<?php echo $form->create('Compra');?>
	<fieldset>
		<legend>Edita Compra</legend>
			<?php
				echo $form->hidden('Compra.id');
				echo $form->input('costo');
				echo $form->input('costoenvio');
				echo $form->input('costototal');
				echo $form->input('fechaenvio');
				echo $form->input('usuario_id');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Compra','title'=>'Agregar Compra',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Compras','title'=>'Listar Compras',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>