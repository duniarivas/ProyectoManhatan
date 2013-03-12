<?php echo $this->element('submenuItem'); ?>

<div id="right">
	<h2>Lista de Items</h2>
		<?php if (empty($items)): ?>
			No hay Items en esta lista
		<?php else: ?>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Peso</th>
				<th>Material</th>
				<th>Estrella</th>
				<th>Descripci&oacute;n</th>
				<th>Subcategor&iacute;a</th>
				<th>Acciones</th>
			</tr>
			
			<?php foreach ($items as $item): ?>
				<tr>
					<td>
						<?php echo $item['Item']['nombre'] ?>
					</td>
					<td>
						<?php echo $item['Item']['precio'] ?>
					</td>
					<td>
						<?php echo $item['Item']['peso'] ?>
					</td>
					<td>
						<?php echo $item['Item']['material'] ?>
					</td>
					<td>
						<?php echo $this->element('rating', array('plugin' => 'rating',
                                    'model' => 'Item',
                                    'id' => $item['Item']['id'])); ?>
					</td>
					<td>
						<?php echo $item['Item']['descripcion'] ?>
					</td>
					<td>
						<?php echo $item['Subcategoria']['nombre'] ?>
					</td>
					<td>
			<?php echo $html->image('edit.png', array('alt'=>'Editar '.$item['Item']['nombre'], 'title'=>'Editar '.$item['Item']['nombre'],
					'url'=>array('action'=>'edit',$item['Item']['id']))); ?>
				
			<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$item['Item']['nombre'], 'title'=>'Eliminar '.$item['Item']['nombre'])),
												array('action'=>'delete', $item['Item']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar el Item?'); ?>
												
			<?php echo $html->image('view.png',array('alt'=>'ver Caracteristicas', 'title'=>'ver Caracteristicas', 'url'=> array('controller'=>'caracteristicas','action'=>'index',$item['Item']['id']))); ?>
			<?php echo $html->image('view.png', array('alt'=>'ver Imagenes', 'title'=>'ver Imagenes', 'url' => array('controller'=>'imagenes','action'=>'index',$item['Item']['id']))); ?>
					</td>
				</tr>
		<?php endforeach; ?>
		</table>
		<?php endif;?>
	<hr>
	<fieldset>
		<legend id="navegador">
			<?php
				echo $paginator->first(' |< ').$paginator->prev(' anterior ').$paginator->numbers().$paginator->next(' siguiente ').$paginator->last(' >| '); 
			?>
		</legend>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Item','title'=>'Agregar Item',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Items','title'=>'Listar Items',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>