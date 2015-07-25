<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;


/**
 * BaseController
 *
 * @author
 *
 * @version
 *
 */
class BaseController extends AbstractActionController
{
    protected function appendTitle( $title ) {
        
        $headTitle = $this->getServiceLocator()->get('viewHelperManager')->get('headTitle');
        $headTitle->append($title);
        
    }
    
    protected function translate( $string ) {
        $translator = $this->getServiceLocator()->get('translator');
        return $translator->translate($string);
    }
}