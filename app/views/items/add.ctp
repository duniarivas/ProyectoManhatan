<?php echo $this->element('submenuItem'); ?>
<div id="page">
	
	<?php echo $form->create('Item');?>
	
	<fieldset>
		<legend>Agregar Nuevo Item</legend>
		
	<?php
		echo $form->input('nombre',array('label'=>'Nombre'));
		echo $form->input('precio',array('label'=>'Precio'));
		echo $form->input('peso', array('label'=>'Peso'));
		echo $form->input('material',array('label'=>'Material'));
		echo $form->input('descripcion',array('label'=>'Descripcion'));
		echo $form->input('subcategoria_id');
	?>
	</fieldset>
	
	<?php echo $form->end('Agregar Item');?>
	
	
		<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Item','title'=>'Listar Item',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>