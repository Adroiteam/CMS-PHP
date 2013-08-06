<?php
/* @var $this TestimonialsController */
/* @var $model Testimonials */

$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	$model->testimonial_id=>array('view','id'=>$model->testimonial_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testimonials', 'url'=>array('index')),
	array('label'=>'Create Testimonials', 'url'=>array('create')),
	array('label'=>'View Testimonials', 'url'=>array('view', 'id'=>$model->testimonial_id)),
	array('label'=>'Manage Testimonials', 'url'=>array('admin')),
);
?>

<h1>Update Testimonials <?php echo $model->testimonial_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>