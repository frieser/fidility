<?php
class modTarjetasHelper
{
    function getTarjetas( $params )
    {
		
 
		$db = &JFactory::getDBO();
		$consulta = "select nombre, ruta from tarjetas";
		$db->setQuery($consulta);
		
		return $db->loadObjectList();
    }
}
?>
