 
defined('_JEXEC') or die("Invalid access");
jimport('joomla.application.component.model');
 
class codgenModelcodgen extends JModel
{
 
	function getMensaje(){
		return "Hola, soy un valor devuelto por el modelo";
	}
}
