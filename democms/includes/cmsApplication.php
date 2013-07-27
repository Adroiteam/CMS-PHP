<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
  //Anything here will be accessible in main functionality of CMS         
  function run()
        {
           if(isset($_REQUEST['task']))
            {
                $task=$_REQUEST['task'];
                switch($task)
                {
                    case 'addcontent':$app->addcontent();break;
                    case 'anyothertask':$app->anyothertask();break;
                    default: $app->display();break;
                }    
            }
            else
            {
                $this->display();
            }
        }
  function addcontent()
  {
    echo 'here add content functionality will takes place';
  }
  function display()
  {
    echo 'here view content functionality will takes place';
  }
  function anyothertask()
  {
    echo 'this is another task here can be written a complete php program against that task';
  }

  
  
  
  }
?>