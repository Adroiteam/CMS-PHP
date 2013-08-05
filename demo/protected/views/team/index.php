<?php
/* @var $this TeamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teams',
);

$this->menu=array(
	array('label'=>'Create Team', 'url'=>array('create')),
	array('label'=>'Manage Team', 'url'=>array('admin')),
);
?>

<section>
<h2>Teams</h2>
</section>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
