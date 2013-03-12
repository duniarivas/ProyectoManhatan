<?php echo $this->element('submenuItem'); ?>
<div id="page">
	<?php echo $form->create('Item');?>
	<fieldset>
		<legend>Edita Tarea</legend>
			<?php
				echo $form->hidden('Item.id');
				echo $form->input('nombre');
				echo $form->input('precio');
				echo $form->input('peso');
				echo $form->input('material');
				echo $form->input('descripcion');
				echo $form->input('subcategoria_id');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
		<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Item','title'=>'Agregar Item',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Item','title'=>'Listar Item',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>