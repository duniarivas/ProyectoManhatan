<?php echo $this->element('submenuItem'); ?>
<div id="page">
	<?php echo $form->create('Categoria');?>
	<fieldset>
		<legend>Edita Categoria</legend>
			<?php
				echo $form->hidden('Categoria.id');
				echo $form->input('nombre');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
	<hr>
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Categoria','title'=>'Agregar Categoria',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Categorias','title'=>'Listar Categorias',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>