<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>Create Project</h2>
</section>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>