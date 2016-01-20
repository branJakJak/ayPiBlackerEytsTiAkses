<?php
/* @var $this IpaddressController */
/* @var $model Ipaddress */

$this->breadcrumbs=array(
	'Ipaddresses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ipaddress', 'url'=>array('index')),
	array('label'=>'Manage Ipaddress', 'url'=>array('admin')),
);
?>

<h1>Create Ipaddress</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>