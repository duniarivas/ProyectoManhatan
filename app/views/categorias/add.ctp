<?php echo $this->element('submenuItem'); ?>
<div id="page">
	
	<?php echo $form->create('Categoria');?>
	
	<fieldset>
		<legend>Agregar Nueva Categoria</legend>
		<?php
			echo $form->input('nombre',array('label'=>'Nombre'));
		
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Categorias');?>
	
	<!-- FIN DE FORMULARIO -->
	
	<hr>
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Categorias','title'=>'Listar Categorias',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>

</div>