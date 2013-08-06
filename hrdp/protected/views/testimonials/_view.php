<?php
/* @var $this TestimonialsController */
/* @var $data Testimonials */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('testimonial_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->testimonial_id), array('view', 'id'=>$data->testimonial_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization')); ?>:</b>
	<?php echo CHtml::encode($data->organization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posthosting')); ?>:</b>
	<?php echo CHtml::encode($data->posthosting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testimonial')); ?>:</b>
	<?php echo CHtml::encode($data->testimonial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />


</div>