<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Survey', 'url'=>array('index')),
	array('label'=>'Manage Survey', 'url'=>array('admin')),
);
?>
<section>
<h2>Create Survey</h2>
</section>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>