<div id="right">
	<h2>Lista de Paises</h2>
		<?php if (empty($paises)): ?>
			No hay Paises en esta lista
		<?php else: ?>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			
			<?php foreach ($paises as $paise): ?>
				<tr>
					<td>
						<?php echo $paise['Paise']['nombre'] ?>
					</td>
					<td>
						<?php echo $html->image('edit.png', array('alt'=>'Editar '.$paise['Paise']['nombre'], 'title'=>'Editar '.$paise['Paise']['nombre'],
					'url'=>array('action'=>'edit',$paise['Paise']['id']))); ?>
				
					<?php echo $html->link($html->image('delete.png', array('alt'=>'Eliminar  '.$paise['Paise']['nombre'], 'title'=>'Eliminar '.$paise['Paise']['nombre'])),
												array('action'=>'delete', $paise['Paise']['id']),
												array('escape'=>false),
												'Esta Seguro de Eliminar el pais?'); ?>
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
					array('alt'=>'Agregar Pais','title'=>'Agregar Pais',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
				
	</fieldset>
</div>
