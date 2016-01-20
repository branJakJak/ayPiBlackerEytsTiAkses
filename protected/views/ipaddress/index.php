<?php
/* @var $this IpaddressController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ipaddresses',
);

$this->menu=array(
	array('label'=>'Create Ipaddress', 'url'=>array('create')),
	array('label'=>'Manage Ipaddress', 'url'=>array('admin')),
);
?>

<h1>Ipaddresses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
