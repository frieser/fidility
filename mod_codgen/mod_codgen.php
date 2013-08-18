<?php
 
// no acceso directo
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// incluir al helper que devolverá los datos, solo una vez
require_once( dirname(__FILE__).DS.'helper.php' );
 

require( JModuleHelper::getLayoutPath( 'mod_codgen','default') );
?>
