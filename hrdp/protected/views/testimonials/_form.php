<?php
/* @var $this TestimonialsController */
/* @var $model Testimonials */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testimonials-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'organization'); ?>
		<?php echo $form->textArea($model,'organization',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'organization'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posthosting'); ?>
		<?php echo $form->textArea($model,'posthosting',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'posthosting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'testimonial'); ?>
		<?php echo $form->textArea($model,'testimonial',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'testimonial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textArea($model,'author',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->