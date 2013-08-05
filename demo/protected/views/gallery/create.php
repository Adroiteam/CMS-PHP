<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gallery', 'url'=>array('index')),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>Create Gallery</h2>
</section>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>