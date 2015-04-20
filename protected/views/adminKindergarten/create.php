<?php
/* @var $this FaqController */
/* @var $model Faq */

//$this->breadcrumbs=array(
//	'Faqs'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List Faq', 'url'=>array('index')),
//	array('label'=>'Manage Faq', 'url'=>array('admin')),
//);
$this->pageTitle= $model->isNewRecord  ? "Aggiungi Asilo Nido" : "Modifica Asilo Nido";
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>