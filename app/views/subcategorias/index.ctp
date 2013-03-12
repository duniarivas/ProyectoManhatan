<?php echo $this->element('submenuItem'); ?>

<div id="right">
	<h2>Lista de Subcategorias</h2>
		<?php if (empty($subcategorias)): ?>
			No hay Subcategorias en esta lista
		<?php else: ?>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Categoria</th>
				<th>Acciones</th>
			</tr>
			
			<?php foreach ($subcategorias as $subcategoria): ?>
				<tr>
					<td>
						<?php echo $subcategoria['Subcategoria']['nombre'] ?>
					</td>
					<td>
						<?php echo $subcategoria['Categoria']['nombre'] ?>
					</td>
					<td>
						<?php echo $html->image('edit.png', array('alt'=>'Editar '.$subcategoria['Subcategoria']['nombre'], 'title'=>'Editar '.$subcategoria['Subcategoria']['nombre'],
					'url'=>array('action'=>'edit',$subcategoria['Subcategoria']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$subcategoria['Subcategoria']['nombre'], 'title'=>'Eliminar '.$subcategoria['Subcategoria']['nombre'])),
												array('action'=>'delete', $subcategoria['Subcategoria']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar La Subcategoria?'); ?>
	
					<?php echo $html->image('view.png', array('alt'=>'Ver Items', 
										'title'=>'Ver Items',
										'url'=>array('controller'=>'items',
											'action'=>'index',
											$subcategoria['Subcategoria']['id'])
										)); ?>
					</td>
				</tr>
		<?php endforeach; ?>
		</table>
		<?php endif;?>
	<fieldset>
		<legend id="navegador">
			<?php
				echo $paginator->first(' |< ').$paginator->prev(' anterior ').$paginator->numbers().$paginator->next(' siguiente ').$paginator->last(' >| '); 
			?>
		</legend>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Subcategoria','title'=>'Agregar Subcategoria',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Subcategorias','title'=>'Listar Subcategorias',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>
