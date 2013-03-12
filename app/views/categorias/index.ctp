<?php echo $this->element('submenuItem'); ?>
	<h2>Lista de Categorias</h2>
	<?php if(empty($categorias)): ?>
		No hay Categorias
	<?php else: ?>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($categorias as $categoria): ?>
			<tr>
				<td>
					<?php echo $categoria['Categoria']['nombre'] ?>
				</td>
				<td>
				
					<?php echo $html->image('edit.png', array('alt'=>'Editar '.$categoria['Categoria']['nombre'], 'title'=>'Editar '.$categoria['Categoria']['nombre'],
					'url'=>array('action'=>'edit',$categoria['Categoria']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$categoria['Categoria']['nombre'], 'title'=>'Eliminar '.$categoria['Categoria']['nombre'])),
												array('action'=>'delete', $categoria['Categoria']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar La Categoria?'); ?>
	
					<?php echo $html->image('view.png', array('alt'=>'Ver Subcategorias', 
										'title'=>'Ver Subcategorias ',
										'url'=>array('controller'=>'subcategorias',
											'action'=>'index',
											$categoria['Categoria']['id'])
										)); ?>

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
					array('alt'=>'Agregar Categoria','title'=>'Agregar Categoria',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Categorias','title'=>'Listar Categorias',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>