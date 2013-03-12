<?php
class Compra extends AppModel{
	var $name ='Compra';
	var $belongsTo = array('Usuario' =>
							array('className' => 'Usuario',
								  'condition' =>'',
								  'order' => '',
								  'foreignKey' => 'usuario_id'
							)
					);
}
?>