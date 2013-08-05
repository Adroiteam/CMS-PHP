<?php
/* @var $this TestimonialsController */
/* @var $model Testimonials */

$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Testimonials', 'url'=>array('index')),
	array('label'=>'Create Testimonials', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#testimonials-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<section>
<h2>Manage Testimonials</h2>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
</section>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'testimonials-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'testimonial_id',
		'organization',
		'posthosting',
		'testimonial',
		'author',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
