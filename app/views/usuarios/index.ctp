
<?php echo $this->element('submenuUsuario'); ?>
<div id="right">
	<h2>Lista de Usuarios</h2>
		<?php if (empty($usuarios)): ?>
			No hay usuarios en esta lista
		<?php else: ?>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				
				<th>Fecha de Registro</th>
				<th>Fecha de Nacimiento</th>
				<th>Tipo</th>
				<th>Acciones</th>
			</tr>
			
			<?php foreach ($usuarios as $usuario): ?>
				<tr>
					<td>
						<?php echo $usuario['Usuario']['nombre'] ?>
					</td>
					<td>
						<?php echo $usuario['Usuario']['apellido'] ?>
					</td>
					
					<td>
						<?php echo $usuario['Usuario']['created'] ?>
					</td>
					<td>
						<?php echo $usuario['Usuario']['nacimiento'] ?>
					</td>
					<td>
						<?php echo $usuario['Usuario']['tipo'] ?>
					</td>
					<td>
			<?php echo $html->image('edit.png', array('alt'=>'Editar '.$usuario['Usuario']['nombre'], 'title'=>'Editar '.$usuario['Usuario']['nombre'],
					'url'=>array('action'=>'edit',$usuario['Usuario']['id']))); ?>
				
			<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$usuario['Usuario']['nombre'], 'title'=>'Eliminar '.$usuario['Usuario']['nombre'])),
												array('action'=>'delete', $usuario['Usuario']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar al Usuario?'); ?>
					
					<?php echo $html->image('view.png', array('alt'=>'Ver Compras', 
										'title'=>'Ver Compras',
										'url'=>array('controller'=>'compras',
											'action'=>'index',
											$usuario['Usuario']['id'])
										)); ?>
										
					<?php echo $html->image('view.png', array('alt'=>'Ver Comentarios', 
										'title'=>'Ver Comentarios',
										'url'=>array('controller'=>'comentarios',
											'action'=>'index',
											$usuario['Usuario']['id'])
										)); ?>
												
						
					</td>
				</tr>
		<?php endforeach; ?>
		</table>
		<?php endif;?>
	<hr>
		<fieldset>
		<!-- Link Agregar -->
		<?php echo $html->image('add.png',
					array('alt'=>'Agregar Usuario','title'=>'Agregar Usuario',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Usuario','title'=>'Listar Usuario',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>