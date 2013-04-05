<div id="page">
	<?php echo $form->create('Imagene', array('type'=>'file')); ?>
	<fieldset>
                <fieldset>
                    <legend>Imagen Cargado</legend>
                    <?php
                        echo "Url: ".$data['Imagene']['url']."<br/>";
                        echo $html->image($data['Imagene']['url'], array('alt'=>'Editar ', 'title'=>'Editar','width'=>'150px','height'=>'150px'));
                    ?>
                </fieldset>
		<legend>Edita Imagen</legend>
		    <?php
			echo $form->hidden('Imagene.id');
			echo $form->input('fileName', array('label'=>'Imagen:', 'type'=>'file'));
			echo $form->input('item_id');
                    ?>
	</fieldset>
	<?php echo $form->end('Guardar');?>

         <fieldset>
		<!-- Link Listar -->
            <?php echo $html->image('add.png',
					array('alt'=>'Agregar Imagenes','title'=>'Agregar Imagenes',
						'width'=>'16px', 'height'=>'16px',
						'url'=>array('action'=>'add'))); ?>

		<?php echo $html->image('list.png',
						array('alt'=>'Listar Imagenes','title'=>'Listar Imagenes',
								'width'=>'16px', 'height'=>'16px',
								'url'=>array('action'=>'index'))); ?>
        </fieldset>
</div>