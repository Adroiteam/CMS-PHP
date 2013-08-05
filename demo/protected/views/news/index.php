<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>News</h2>
</section>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
