<?php echo $this->element('submenuItem'); ?>
<div id="page">
	<?php echo $form->create('Subcategoria');?>
	<fieldset>
		<legend>Edita Subcategoria</legend>
			<?php
				echo $form->hidden('Subcategoria.id');
				echo $form->input('nombre');
				echo $form->input('categoria_id');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Subcategoria','title'=>'Agregar Subcategoria',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Subcategorias','title'=>'Listar Subcategorias',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>