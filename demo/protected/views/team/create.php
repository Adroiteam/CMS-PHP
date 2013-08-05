<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Team', 'url'=>array('index')),
	array('label'=>'Manage Team', 'url'=>array('admin')),
);
?>
<section>
<h2>Create Teams</h2>
</section>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>