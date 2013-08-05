<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);
?>

<?php
$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>
<section id="content">
<h2>Create post</h2>
</section>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
