
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
					<?php
                                            $fecha = new DateTime($comentario['Comentario']['created']);
                                            echo $fecha->format('d/m/Y');
                                        ?>
				</td>
				<td>
				<?php echo $comentario['Usuario']['nombre'] ?>
				</td>
				<td>
				<?php echo $comentario['Item']['nombre'] ?>
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
	

	
</div>