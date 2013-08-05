<?php
/* @var $this CareersController */
/* @var $model Careers */

$this->breadcrumbs=array(
	'Careers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Careers', 'url'=>array('index')),
	array('label'=>'Manage Careers', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>create Career</h2>
</section>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>