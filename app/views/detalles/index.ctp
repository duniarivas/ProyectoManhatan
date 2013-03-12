<div id="right">
	<h2>Lista de Detalles</h2>
	<?php if(empty($detalles)): ?>
		No hay Detalles
	<?php else: ?>
		<table>
			<tr>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Compra</th>
				<th>Caracteristica</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($detalles as $detalle): ?>
			<tr>
				<td>
					<?php echo $detalle['Detalle']['cantidad'] ?>
				</td>
				<td>
					<?php echo $detalle['Detalle']['precio'] ?>
				</td>
				<td>
					<?php echo $detalle['Detalle']['compra_id'] ?>
				</td>
				<td>
					<?php echo $detalle['Detalle']['caracteristica_id'] ?>
				</td>
				<td>
				
					<?php echo $html->image('edit.png', array('alt'=>'Editar '.$detalle['Detalle']['id'], 'title'=>'Editar '.$detalle['Detalle']['id'],
					'url'=>array('action'=>'edit',$detalle['Detalle']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$detalle['Detalle']['id'], 'title'=>'Eliminar '.$detalle['Detalle']['id'])),
												array('action'=>'delete', $detalle['Detalle']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar El detalle?'); ?>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif;?>
	
	<hr>
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Detalle','title'=>'Agregar Detalle',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
					
	</fieldset>
	
</div>