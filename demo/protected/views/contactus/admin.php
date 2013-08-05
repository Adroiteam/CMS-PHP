<?php
/* @var $this ContactusController */
/* @var $model Contactus */

$this->breadcrumbs=array(
	'Contactuses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Contactus', 'url'=>array('index')),
	array('label'=>'Create Contactus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contactus-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<section id="content">
<h2>Manage  Contact Ss</h2>
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
	'id'=>'contactus-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
		'subject',
		'body',
		'captcha',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
