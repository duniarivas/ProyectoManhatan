<?php
class Detalle extends AppModel{
	var $name = 'Detalle';
	var $belongsTo = array('Compra' =>
								array( 'className' => 'Compra',
									   'condition' => '',
									   'order' => '',
									   'foreignKey' => 'compra_id'
								),
							'Caracteristica' =>
									array('className' =>'Caracteristica',
									'condition' => '',
									 'order' => '',
									  'foreignKey' => 'caracteristica_id'
								)
					  );
}
?>