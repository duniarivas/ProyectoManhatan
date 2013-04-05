<div id="page">
	<?php echo $form->create('Usuario');?>
	<fieldset>
		<legend>Edita Usuario</legend>
			<?php
				echo $form->hidden('Usuario.id');
				echo $form->input('nombre');
				echo $form->input('apellido');
				echo $form->input('email');
				echo $form->input('password');
				echo $form->input('emailverificado');
				echo $form->input('nacimiento',array('label'=>'Fecha de Nacimiento',
											'dateFormat'=>'DMY',
											'minYear' => date('Y')-70,
											'maxYear' => date('Y')-18,
											'monthNames'=>false
										));
				echo $form->input('tipo');
			?>
	</fieldset>
	<?php echo $form->end('Guardar');?>
	
    <fieldset>
		<!-- Link Listar -->
        <?php echo $html->image('add.png',
					array('alt'=>'Agregar Item','title'=>'Agregar Usuario',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>
                        
		<?php echo $html->image('list.png',
						array('alt'=>'Listar Usuario','title'=>'Listar Usuario',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>				
    </fieldset>
</div>