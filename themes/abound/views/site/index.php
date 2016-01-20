<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<style type="text/css">
    
    input.error{
        border: 1px solid red !important;
    }
</style>
<div class="row-fluid">
	<div class="span6 offset3">
    <?php
        $this->widget('bootstrap.widgets.TbAlert', array(
            'fade'=>true,
            'closeText'=>'×',
            'alerts'=>array(
                'danger'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
                'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
                'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
                'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
            ),
        )); 
    ?>
        <?php echo CHtml::beginForm(array('/home'), 'POST', array('class'=>"well")); ?>
            <label>Add new IP Address</label>
            <?php echo CHtml::error($formModel, 'ip_address',array('style'=>"color:red")); ?>
            <?php echo CHtml::activeTextField($formModel, 'ip_address'); ?>
            <br>
            <?php echo CHtml::button('Submit', array('type'=>'submit','class'=>"btn btn-primary",'name'=>'createNewIP')); ?>
        <?php echo CHtml::endForm(); ?>

	  <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-large"></span>Manage Whitelisted Ip Address',
			'titleCssClass'=>''
		));
		?>

        <?php 
          $this->widget('zii.widgets.grid.CGridView', array(
            'dataProvider'=>$datasource,
            'filter'=>$model,
            'columns'=>array(
                'ip_address',
                /*@TODO - change delete url link*/
                array(
                    'class'=>'application.libs.gridview.DashboardMainButton',
                ),
            ),
          ));
        ?>        


        <?php $this->endWidget(); ?>
	</div><!--/span-->

</div><!--/row-->

          
