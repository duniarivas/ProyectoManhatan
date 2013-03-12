<div style="width:450px;margin:10px auto;">
	<fieldset>
		<legend style="background-color:transparent;">Llene Sus Datos</legend>
		
	<?php
    	echo $form->create('Usuario', array('action' => 'login'));
    	echo $form->input('email');
   		echo $form->input('password');
    	echo $form->end('Login');
	?>
	</fieldset>
	
</div>