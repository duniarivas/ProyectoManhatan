<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Boutique: Iniciar Sesion Administrador"; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('estilo');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="headercontenido">
				<?php echo $this->Html->image('logo.png',array('title'=>'Boutique Romane','alt'=>'Boutique Romane','width'=>'150px','height'=>'150px')) ?>
			</div>
                        <div id="flash">
					<?php 
						echo $this->Session->flash(); 
						echo $this->Session->flash('auth'); 
					?>
			</div>
		</div>
		<div id="content">
			<div id="contentcontenido">
				<?php echo $this->Session->flash(); ?>
	
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		<div id="footer">
			<div id="footercontenido">
				
			</div>
		</div>
	</div>
</body>
</html>