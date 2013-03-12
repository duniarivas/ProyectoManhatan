<div id="right">
	<h2>Lista de Deseos</h2>
		<?php if (empty($deseos)): ?>
			No hay Deseos en esta lista
		<?php else: ?>
		<table>
			<tr>
				<th>Usuario</th>
				<th>Item</th>
				<th>Estrella</th>
				<th>Acciones</th>
			</tr>
			
			<?php foreach ($deseos as $deseo): ?>
				<tr>
					<td>
						<?php echo $deseo['Deseo']['usuario_id'] ?>
					</td>
					<td>
						<?php echo $deseo['Deseo']['item_id'] ?>
					</td>
					<td>
						<?php echo $deseo['Deseo']['estrella'] ?>
					</td>
					<td>
						<?php echo $html->image('edit.png', array('alt'=>'Editar '.$deseo['Deseo']['id'], 'title'=>'Editar '.$deseo['Deseo']['id'],
					'url'=>array('action'=>'edit',$deseo['Deseo']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$deseo['Deseo']['id'], 'title'=>'Eliminar '.$deseo['Deseo']['id'])),
												array('action'=>'delete', $deseo['Deseo']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar El deseo?'); ?>
	
					
					</td>
				</tr>
		<?php endforeach; ?>
		</table>
		<?php endif;?>
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Deseo','title'=>'Agregar Deseo',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
</div>
