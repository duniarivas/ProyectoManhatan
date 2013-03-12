<?php
class Comentario extends AppModel{
	var $name ='Comentario';
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