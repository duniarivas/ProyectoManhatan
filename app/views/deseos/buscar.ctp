<?php
	function gravatar($email){
		$size = 50;
		return "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?size=".$size; 
	}
?>
<div id="lado-izquierdo">
	<?php echo $this->element('menuUsuario'); ?>
</div>
<div id="lado-derecho">
	
	<?php echo $form->create('Deseo');?>
	
	<fieldset>
		
	<?php
		echo $form->input('nombre',array('label'=>'Nombre o Apellido','placeholder'=>'Busca por Nombre o Apellido'));
	?>
	<?php echo $form->end('Buscar Deseos');?>

	</fieldset>
	
	Perfiles:
	<hr>
	<ul style="padding: 10px; list-style: none;">
		<?php
		if($perfiles != null){
			foreach($perfiles as $perfil){
				echo "<li>";
				echo "<img src='".gravatar($perfil['Usuario']['email'])."' /> ";
				echo $html->link($perfil['Usuario']['nombre']." ".$perfil['Usuario']['apellido'],
									array('controller'=>'deseos',
											'action'=>'perfil',
											$perfil['Usuario']['id'])
							);
				echo "</li>";
			}
		}
		?>
	</ul>
	<br>
	<hr>
	<?php
		if( $perfiles != null){
			echo "<p style='text-align:center;font-size:12px;font-weight:lighter;background-color:#CCCCCC'>".
					$paginator->numbers().
				 "</p>";
		}
	?>
	<hr>
</div>