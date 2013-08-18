    defined( '_JEXEC') or die( 'Restricted access');
    jimport( 'joomla.application.component.view');
 
    class codgenViewprueba extends JView
    {
	    function display($tpl = null)
	    {
		$model =& $this->getModel();
		$mensaje = $model->getMensaje();
		$this->assignRef('mensaje',$mensaje);
 
		parent::display($tpl);
	    }
 
    }
