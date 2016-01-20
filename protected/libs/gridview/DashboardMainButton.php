<?php 
/**
* DashboardMainButton
*/
class DashboardMainButton extends CButtonColumn
{
	
	public $template='{delete}';
	public $deleteButtonUrl='Yii::app()->controller->createUrl("/site/deleteIp",array("ip_address"=>$data->ip_address))';
	

}