<?php
    $size = 200;
    $email = $usuario['Usuario']['email'];
    $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?size=".$size; 
?>


<h2> Perfil de 
	<?php echo $usuario['Usuario']['nombre']." ".$usuario['Usuario']['apellido'];?> 
</h2>
<section>
    <figure id="Gravatar">
        <img id="GravatarPerfil" src="<?php echo $grav_url; ?>" alt="Foto de Perfil">
        <figcaption>
            <img src="http://1.bp.blogspot.com/-iHkoGg00jus/USWYsQdtZzI/AAAAAAAACuc/9Bjb2logLTw/s1600/Gravatar+icon.png" width="50" height="50"/>Gravatar.com
        </figcaption>    
    </figure>
    <div id="DatosPerfil">
        Datos:
        <hr>
                <small><b>Nombre:</b></small>&nbsp;&nbsp;&nbsp;<?php echo $usuario['Usuario']['nombre']."<br>";?>
                <small><b>Apellido:</b></small>&nbsp;&nbsp;&nbsp;<?php echo $usuario['Usuario']['apellido']."<br>";?>
                <small><b>Fecha de Nacimiento:</b></small>&nbsp;&nbsp;&nbsp;<?php echo $usuario['Usuario']['nacimiento']."<br>";?>
                <small><b>Email:</b></small>&nbsp;&nbsp;&nbsp;<?php echo $usuario['Usuario']['email']."<br>";?>
                <small><b>Fecha de Registro:</b></small>&nbsp;&nbsp;&nbsp;<?php echo $usuario['Usuario']['created']."<br>";?>
                <small><b>Password:</b></small>&nbsp;&nbsp;&nbsp;
                                                        <?php echo $html->link('Cambiar Password',array('action'=>'password'))."<br>";?>
        <br>
        <br>
        Direccion:
        <hr>
                <?php
                        if(empty($direcciones)){
                                echo "<b>Usted No Agrego Direcciones</b>";
                                echo "<br>";
                                echo "Desea ".$html->link("Agregar Una Direccion",array('controller'=>'direcciones', 'action'=>'add') );
                        } else{
                                foreach($direcciones as $direccion){
                                        echo "<small><b>Direccion 1:</b></small>   ".
                                                        $direccion['Direccione']['direccion1'];
                                        echo "<br>";
                                        echo "<small><b>Direccion 2:</b></small>   ".
                                                        $direccion['Direccione']['direccion2'];
                                        echo "<br>";
                                        echo "<small><b>Telefono:</b></small>   ".
                                                        $direccion['Direccione']['telefono'];
                                        echo "<br>";
                                        echo "<small><b>Fax:</b></small>   ".
                                                        $direccion['Direccione']['fax'];
                                        echo "<br>";
                                        echo "<small><b>Ciudad:</b></small>   ".
                                                        $direccion['Direccione']['ciudad'];
                                        echo "<br>";
                                        echo "<small><b>Pais:</b></small>   ".
                                                        $direccion['Paise']['nombre'];
                                        echo "<fieldset>";
                                        echo $html->link('Modificar Direccion',array(
                                                                                                                'controller'=>'direcciones',
                                                                                                                'action'=>'edit',
                                                                                                                $direccion['Direccione']['id']))."<br>";
                                        echo "</fieldset>";
                                }
                        }
                ?>
    </div>
</section>
<div class="CajaDeDeseos">
    <hr/>
    Caja de Deseos
</div>