<?php echo $this->element('submenuItem'); ?>
<div id="right">
	<h2>Lista de Imagenes</h2>
	<?php if(empty($imagenes)): ?>
		No hay Imagenes
	<?php else: ?>
		<table>
			<tr>
				<th>Url-Imagen</th>
				<th>Item</th>
				<th>Acciones</th>
			</tr>
		<?php foreach ($imagenes as $imagen): ?>
			<tr>
				<td>
					<?php echo 'Ruta: '.$imagen['Imagene']['url'].'<br>' ?>
					<?php echo $html->image($imagen['Imagene']['url'], array('width'=>'100px','height'=>'100px')); ?>
				</td>
				<td>
					<?php echo $imagen['Item']['nombre'] ?>
				</td>
				<td>
				<?php echo $html->image('edit.png', array('alt'=>'Editar ', 'title'=>'Editar ',
					'url'=>array('action'=>'edit',$imagen['Imagene']['id']))); ?>
				
			<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  ', 'title'=>'Eliminar ')),
												array('action'=>'delete', $imagen['Imagene']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar el Imagen?'); ?>
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
					array('alt'=>'Agregar Imagen','title'=>'Agregar Imagen',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
		<!-- Link Listar -->
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Items','title'=>'Listar Imagenes',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
	</fieldset>
</div>