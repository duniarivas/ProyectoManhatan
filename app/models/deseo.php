<?php 
/**
 *Creacion del modelo para la tabla deseos
 */
class Deseo extends AppModel{
	var $name = 'Deseo';
	var $belongsTo = array('Usuario' =>
						array( 'className' => 'Usuario',
							   'conditions' => '',
							   'order' => '',
							   'foreingKey' => 'usuario_id'
							  ),
							  'Item'=>array('className'=>'Item',
							                    'conditions'=>'',
												'order'=>'',
												'foreingKey'=>'item_id')
					  );
}
?>