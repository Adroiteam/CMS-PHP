<?php
/* @var $this CareersController */
/* @var $model Careers */

$this->breadcrumbs=array(
	'Careers'=>array('index'),
	$model->job_id=>array('view','id'=>$model->job_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Careers', 'url'=>array('index')),
	array('label'=>'Create Careers', 'url'=>array('create')),
	array('label'=>'View Careers', 'url'=>array('view', 'id'=>$model->job_id)),
	array('label'=>'Manage Careers', 'url'=>array('admin')),
);
?>

<h1>Update Careers <?php echo $model->job_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>