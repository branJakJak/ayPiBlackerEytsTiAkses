<?php
/* @var $this IpaddressController */
/* @var $model Ipaddress */

$this->breadcrumbs=array(
	'Ipaddresses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ipaddress', 'url'=>array('index')),
	array('label'=>'Create Ipaddress', 'url'=>array('create')),
	array('label'=>'View Ipaddress', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ipaddress', 'url'=>array('admin')),
);
?>

<h1>Update Ipaddress <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>