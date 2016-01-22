<?php


class InvertStatusButtonColumnLink extends CLinkColumn{
    public function init()
    {
        parent::init();
        $this->url =Yii::app()->createUrl("/home");
    }

    public function getDataCellContent($row)
    {
        /* @var $data Ipaddress */
        $data=$this->grid->dataProvider->data[$row];
        //build the url expression
        if ($data->status == Ipaddress::IP_ADDRESS_STATUS_WHITELIST) {
            $this->urlExpression = 'Yii::app()->createUrl("/ipaddress/block",array("ip" => $data->ip_address))';
            $this->linkHtmlOptions = array_merge($this->linkHtmlOptions , array("confirm" => "Are you sure you want to block this IP address ?"));
            $this->label = "block ?";
        }else{
            $this->urlExpression = 'Yii::app()->createUrl("/ipaddress/allow",array("ip" => $data->ip_address))';
            $this->linkHtmlOptions = array_merge($this->linkHtmlOptions , array("confirm" => "Are you sure you want to allow this IP address ?"));
            $this->label = "allow ?";
        }
        return parent::getDataCellContent($row);
    }


}