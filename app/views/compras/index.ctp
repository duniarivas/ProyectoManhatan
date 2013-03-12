
<?php echo $this->element('submenuCompras'); ?>
<div id="right">
	<h2>Lista de Compras</h2>
	<?php if(empty($compras)): ?>
		No hay Compra
	<?php else: ?>
		<table>
			<tr>
				<th>Costo</th>
				<th>Costo de Envio</th>
				<th>Costo Total</th>
				<th>Fecha de Creacion</th>
				<th>Fecha de Envio</th>
				<th>Usuario</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($compras as $compra): ?>
			<tr>
				<td>
					<?php echo $compra['Compra']['costo'] ?>
				</td>
				<td>
					<?php echo $compra['Compra']['costoenvio'] ?>
				</td>
				<td>
					<?php echo $compra['Compra']['costototal'] ?>
				</td>
				<td>
					<?php echo $compra['Compra']['created'] ?>
				</td>
				<td>
				<?php echo $compra['Compra']['fechaenvio'] ?>
				</td>
				<td>
				<?php echo $compra['Compra']['usuario_id'] ?>
				</td>
				<td>
				
					<?php echo $html->image('edit.png', array('alt'=>'Editar '.$compra['Compra']['costo'], 'title'=>'Editar '.$compra['Compra']['costo'],
					'url'=>array('action'=>'edit',$compra['Compra']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$compra['Compra']['costo'], 'title'=>'Eliminar '.$compra['Compra']['costo'])),
												array('action'=>'delete', $compra['Compra']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar la compra?'); ?>
	
					<?php echo $html->image('view.png', array('alt'=>'Ver Compras', 
										'title'=>'Ver Compras ',
										'url'=>array('controller'=>'Compras',
											'action'=>'index',
											$compra['Compra']['id'])
										)); ?>

				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif;?>
	
	<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Compra','title'=>'Agregar Compra',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
	</fieldset>
	
</div>