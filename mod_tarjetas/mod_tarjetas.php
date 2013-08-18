<?php
 
// no acceso directo
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// incluir al helper que devolverá los datos, solo una vez
require_once( dirname(__FILE__).DS.'helper.php' );
 
$tarjetas = modTarjetasHelper::getTarjetas( $params );
require( JModuleHelper::getLayoutPath( 'mod_tarjetas','default') );
?>
