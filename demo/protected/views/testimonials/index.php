<?php
/* @var $this TestimonialsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testimonials',
);

$this->menu=array(
	array('label'=>'Create Testimonials', 'url'=>array('create')),
	array('label'=>'Manage Testimonials', 'url'=>array('admin')),
);
?>

<section>
<h2>Testimonials</h2>
</section>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
