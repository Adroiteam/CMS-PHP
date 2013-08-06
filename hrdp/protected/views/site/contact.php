<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
</head>
<h2>Contact Us</h2><br>
<section id="content">
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p class="subtitle">>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p><br>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p><br>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>
<br>
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
	<br>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<br>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
<br>
<?php $this->endWidget(); ?>

</div><!-- form -->
<div>
		<div>
			<div>
			<br>
			<br>
				<strong><b>Contact Details<b></strong><br><br>
				<ul>
					<li>
						<strong><b>Location:</b></strong><br><br>
						<p>
							This is just a place holder, so you can see what the site would look like<br><br>
						</p>
						<table>
						<tr>
						<td>
						</td>
						<td>
						</td>
						<td>
						<a href="https://maps.google.com/maps?hl=en&authuser=0&q=pak+peshawar&ie=UTF-8&hq=&hnear=0x38d917b90f0e79cf:0xa816b2637558a412,Peshawar,+Pakistan&ei=ehH-Ucb4DMWI4ATk0oCQBQ&ved=0CI4BELYD" id="facebook" target="_blank"><img src="images/map.gif" alt="Image" height= 45% width =10%></a>
						</td>
						</tr>
						</table>
						</li>
					<li>
						<strong><b>Phone:</b></strong><br><br>
						<p>
							033-123-123-34
						</p>
					</li>
					<li>
						<strong><b>Email:</b></strong><br><br>
						<p>
							<a href="http://www.freewebsitetemplates.com/misc/contact" class="email" target="_blank">humanresorcedevelopmentprogramm.com</a>
						</p>
					</li>
					<li>
						<strong><b>Social :</b></strong><br><br>
					</li>
				</ul>
							</div>
		</div>
		<br>
		<table>
		<tr>
		<td width =5% height =20%><a href="http://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank"><img src="images/icon2.jpg" alt="Image" height= 20% width =5%></a></td>
		<td width =5% height =20%>	<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank"><img src="images/icon1.jpg" alt="Image" height= 20% width =5%></a></td>
		<td width =5% height =20%><a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank"><img src="images/icon3.png" alt="Image" height= 20% width =5%></a></td><td width =5% height =20%> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank"><img src="images/icon4.jpg" alt="Image" height= 20% width =5%></td>
		<td></td>
	
		<td width =5% height =20%></td>
		</tr>
		</table>



</section>

<br>
<div id="map_div"></div>

<?php endif; ?>
