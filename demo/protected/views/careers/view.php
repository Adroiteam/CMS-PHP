<?php
/* @var $this CareersController */
/* @var $model Careers */

$this->breadcrumbs=array(
	'Careers'=>array('index'),
	$model->job_id,
);

$this->menu=array(
	array('label'=>'List Careers', 'url'=>array('index')),
	array('label'=>'Create Careers', 'url'=>array('create')),
	array('label'=>'Update Careers', 'url'=>array('update', 'id'=>$model->job_id)),
	array('label'=>'Delete Careers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->job_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Careers', 'url'=>array('admin')),
);
?>

<h1>View Careers #<?php echo $model->job_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'job_id',
		'job_title',
		'job_description',
		'CV',
	),
)); ?>
