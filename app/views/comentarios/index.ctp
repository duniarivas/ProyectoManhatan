
<?php echo $this->element('submenuUsuario'); ?>
<div id="right">
	<h2>Lista de Comentarios</h2>
	<?php if(empty($comentarios)): ?>
		No hay Comentarios
	<?php else: ?>
		<table>
			<tr>
				<th>Comentario</th>
				<th>Fecha de Creacion</th>
				<th>Usuario</th>
				<th>Item</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($comentarios as $comentario): ?>
			<tr>
				<td>
					<?php echo $comentario['Comentario']['comentario'] ?>
				</td>
				<td>
					<?php echo $comentario['Comentario']['created'] ?>
				</td>
				<td>
				<?php echo $comentario['Comentario']['usuario_id'] ?>
				</td>
				<td>
				<?php echo $comentario['Comentario']['item_id'] ?>
				</td>
				<td>
				<?php echo $html->image('edit.png', array('alt'=>'Editar '.$comentario['Comentario']['comentario'], 'title'=>'Editar '.$comentario['Comentario']['comentario'],
					'url'=>array('action'=>'edit',$comentario['Comentario']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$comentario['Comentario']['comentario'], 'title'=>'Eliminar '.$comentario['Comentario']['comentario'])),
												array('action'=>'delete', $comentario['Comentario']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar el Comentario?'); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif;?>
	
<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Comentario','title'=>'Agregar Comentario',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
	
</div>