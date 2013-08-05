<?php
/* @var $this TestimonialsController */
/* @var $model Testimonials */

$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Testimonials', 'url'=>array('index')),
	array('label'=>'Manage Testimonials', 'url'=>array('admin')),
);
?>
<section>
<h2>Create Testimonials</h2>
</section>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>