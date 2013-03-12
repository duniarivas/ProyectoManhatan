<div id="right">
	<h2>Lista de Direcciones</h2>
	<?php if(empty($direcciones)): ?>
		No hay Direcciones
	<?php else: ?>
		<table>
			<tr>
				<th>Direccion 1</th>
				<th>Direccion 2</th>
				<th>Ciudad</th>
				<th>Telefono</th>
				<th>Fax</th>
				<th>Usuario</th>
				<th>Pais</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($direcciones as $direccione): ?>
			<tr>
				<td>
					<?php echo $direccione['Direccione']['direccion1'] ?>
				</td>
				<td>
					<?php echo $direccione['Direccione']['direccion2'] ?>
				</td>
				<td>
					<?php echo $direccione['Direccione']['ciudad'] ?>
				</td>
				<td>
					<?php echo $direccione['Direccione']['telefono'] ?>
				</td>
				<td>
					<?php echo $direccione['Direccione']['fax'] ?>
				</td>
				<td>
				<?php echo $direccione['Direccione']['usuario_id'] ?>
				</td>
				<td>
				<?php echo $direccione['Direccione']['paise_id'] ?>
				</td>
				<td>
				<?php echo $html->image('edit.png', array('alt'=>'Editar '.$direccione['Direccione']['direccion1'], 'title'=>'Editar '.$direccione['Direccione']['direccion1'],
					'url'=>array('action'=>'edit',$direccione['Direccione']['id']))); ?>
				
					
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$direccione['Direccione']['direccion1'], 'title'=>'Eliminar '.$direccione['Direccione']['direccion1'])),
												array('action'=>'delete', $direccione['Direccione']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar La Direccion?'); ?>
	
					<?php echo $html->image('view.png', array('alt'=>'Ver Direcciones', 
										'title'=>'Ver Direcciones',
										'url'=>array('controller'=>'direcciones',
											'action'=>'index',
											$direccione['Direccione']['id'])
										)); ?>
					</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif;?>
	
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Direccion','title'=>'Agregar Direccion',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
				
	</fieldset>
	
</div>