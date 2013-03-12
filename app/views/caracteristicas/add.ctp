<div id="page">
	
	<?php echo $form->create('Caracteristica');?>
	
	<fieldset>
		<legend>Agregar Nueva Caracteristica</legend>
		<?php
			echo $form->input('talla',array('label'=>'Talla'));
			echo $form->input('color',array('label'=>'Color'));
			echo $form->input('stock',array('label'=>'Stock'));
			echo $form->input('item_id');
		
		?>
	</fieldset>
	
	<?php echo $form->end('Agregar Caracteristica');?>
	<!-- FIN DE FORMULARIO -->
	
	<hr>
	<fieldset>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Caracteristicas','title'=>'Listar Caracteristicas',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>

</div>