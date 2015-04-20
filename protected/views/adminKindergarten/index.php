<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */
//
//$this->breadcrumbs=array(
//	'Faqs',
//);
//
//$this->menu=array(
//	array('label'=>'Create Faq', 'url'=>array('create')),
//	array('label'=>'Manage Faq', 'url'=>array('admin')),
//);

$this->pageTitle=Yii::app()->name . " - Termini e condizioni";
$this->bodyTitle="Termini e condizioni";
$this->bodyImage="<img src=\"".Yii::app()->request->baseUrl."/themes/default/img/image_terms_and_conditions.png\"/>";


?>

<h1>Faqs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
