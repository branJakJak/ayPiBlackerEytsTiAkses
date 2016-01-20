<?php
/* @var $this IpaddressController */
/* @var $model Ipaddress */

$this->breadcrumbs=array(
	'Ipaddresses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ipaddress', 'url'=>array('index')),
	array('label'=>'Create Ipaddress', 'url'=>array('create')),
	array('label'=>'Update Ipaddress', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ipaddress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ipaddress', 'url'=>array('admin')),
);
?>

<h1>View Ipaddress #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ip_address',
		'status',
		'date_created',
		'date_updated',
	),
)); ?>
