<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>Create News</h2>
</section>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>