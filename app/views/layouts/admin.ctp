<!DOCTYPE html>
<html lang="es">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Boutique: "; ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('estilo');

		echo $scripts_for_layout;
	?>
        
        <script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>

        <script type="text/javascript">
            tinyMCE.init({
                    language: "es",
                    mode : "textareas"
            });
        </script>

</head>
<body>
	<div id="container">
		<div id="header">
			<div id="headercontenido">
				<?php echo $this->Html->image('logo.png',array('title'=>'Boutique Romane','alt'=>'Boutique Romane','width'=>'150px','height'=>'150px')) ?>
                                <div id="flash">
					<?php 
						echo $this->Session->flash(); 
						echo $this->Session->flash('auth'); 
					?>
				</div>
			</div>
			<div id="gris">
				<div id="menusuperior">
                <?php if ( $user ) {?>
				<?php echo $this->Html->link('usuario', array('controller'=>'usuarios','action'=>'index') ); ?>
				<?php echo $this->Html->link('items', array('controller'=>'categorias','action'=>'index') ); ?>
				<?php echo $this->Html->link('paises', array('controller'=>'paises','action'=>'index') ); ?>
				<?php echo $this->Html->link('email', array('controller'=>'usuarios','action'=>'email') ); ?>
				<?php echo  $this->Html->link('salir','/usuarios/logout');?>
                <?php }?>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="contentcontenido">
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