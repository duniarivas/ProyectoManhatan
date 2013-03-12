<?php echo $this->element('submenuItem'); ?>
<div id="right">
	<h2>Lista de Caracter&iacute;sticas</h2>
	<?php if(empty($caracteristicas)): ?>
		No hay Caracter&iacute;sticas
	<?php else: ?>
		<table>
			<tr>
				<th>Talla</th>
				<th>Color</th>
				<th>Stock</th>
				<th>Fecha de Creacion</th>
				<th>Fecha de Modificacion</th>
				<th>Item</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($caracteristicas as $caracteristica): ?>
			<tr>
				<td>
					<?php echo $caracteristica['Caracteristica']['talla'] ?>
				</td>
				<td>
					<?php echo $caracteristica['Caracteristica']['color'] ?>
				</td>
				<td>
					<?php echo $caracteristica['Caracteristica']['stock'] ?>
				</td>
				<td>
				<?php echo $caracteristica['Caracteristica']['created'] ?>
				</td>
				<td>
				<?php echo $caracteristica['Caracteristica']['modified'] ?>
				</td>
				<td>
				<?php echo $caracteristica['Item']['nombre'] ?>
				</td>
				<td>
				
					<?php echo $html->image('edit.png', array('alt'=>'Editar '.$caracteristica['Caracteristica']['id'], 'title'=>'Editar '.$caracteristica['Caracteristica']['id'],
					'url'=>array('action'=>'edit',$caracteristica['Caracteristica']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$caracteristica['Caracteristica']['id'], 'title'=>'Eliminar '.$caracteristica['Caracteristica']['id'])),
												array('action'=>'delete', $caracteristica['Caracteristica']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar La Categoria?'); ?>

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
		<?php 
			if($idItem == null){
				echo $html->image('add.png',
						array('alt'=>'Agregar Caracteristica','title'=>'Agregar Caracteristica',
							'width'=>'16px', 'height'=>'16px',
							'url'=>array('action'=>'add')));
			} else {
				echo $html->image('add.png',
						array('alt'=>'Agregar Caracteristica','title'=>'Agregar Caracteristica',
							'width'=>'16px', 'height'=>'16px',
							'url'=>array('action'=>'add',$idItem)));
			}
		?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Caracteristica','title'=>'Listar Caracteristica',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
	
</div>