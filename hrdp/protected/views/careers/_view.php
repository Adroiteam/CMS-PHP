<?php
/* @var $this CareersController */
/* @var $data Careers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->job_id), array('view', 'id'=>$data->job_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
	<?php echo CHtml::encode($data->job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_description')); ?>:</b>
	<?php echo CHtml::encode($data->job_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CV')); ?>:</b>
	<?php echo CHtml::encode($data->CV); ?>
	<br />


</div>