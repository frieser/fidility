
<?php
$user =& JFactory::getUser();
        
        if ($user->guest) {
                echo "<p>Debes estar logueado para poder generar codigos (prueba/prueba)</p>";
        } else {

?>



<input id="generador" type="button" value="Crear nueva tarjeta" /> </form>

<form id="codigo_form">
<p>Nº Tarjeta<br /><input id="tarjeta" name="Nº Tarjeta" type="text" /><br />Usuario<br /><input name="Usuario" type="text" /><br />Contraseña<br /><input name="contraseña&quot;&quot;" type="text" /></p>
<input id="boton" type="button" value="Enviar Consulta" /> </form>
<div id="codigo">.</div>



<?php

 echo "<p>Your name is {$user->name}, your email is {$user->email}, and your username is {$user->username}</p>";
}
?>
