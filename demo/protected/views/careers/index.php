<?php
/* @var $this CareersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Careers',
);

$this->menu=array(
	array('label'=>'Create Careers', 'url'=>array('create')),
	array('label'=>'Manage Careers', 'url'=>array('admin')),
);
?>

<section id="content">
<h2>Career</h2>
</section>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
