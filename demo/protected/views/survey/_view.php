<?php
/* @var $this SurveyController */
/* @var $data Survey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('survey_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->survey_id), array('view', 'id'=>$data->survey_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic')); ?>:</b>
	<?php echo CHtml::encode($data->topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />


</div>