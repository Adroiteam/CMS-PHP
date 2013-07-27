<?php
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
    //All CMS template management related functions will be here.
    var $templateName='default';//by default template would be "default" template
    
    function getCurrentTemplatePath()
    {
        return 'templates/'.$this->templateName.'/';
    }
//this will set template which we want to use    
    function setTemplate($templateName)
    {
        $this->templateName=$templateName;
    }
	function show()
    {
        require_once($this->getCurrentTemplatePath().'index.php');
    }
	function appOutput()
{
    require_once('includes/cmsApplication.php');
    $app=new CmsApplication();
    $app->run();
}

}
?>