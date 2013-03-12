<?php echo $this->element('submenuItem'); ?>
<div id="page">
	
	<?php echo $form->create('Subcategoria');?>
	
	<fieldset>
		<legend>Agregar Nueva Subcategoria</legend>
		
	<?php
		echo $form->input('nombre',array('label'=>'Nombre'));
		echo $form->input('categoria_id');
	?>
	</fieldset>
	
	<?php echo $form->end('Agregar Subcategoria');?>
	
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Subcategorias','title'=>'Listar Subcategorias',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>