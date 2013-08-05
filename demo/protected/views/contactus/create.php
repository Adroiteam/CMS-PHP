<?php
/* @var $this ContactusController */
/* @var $model Contactus */

$this->breadcrumbs=array(
	'Contactuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contactus', 'url'=>array('index')),
	array('label'=>'Manage Contactus', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>Create contact US</h2>
<section>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>