<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::app()->name . " - Registrazione Genitore ";
$this->bodyTitle="Registrazione Genitore";
?>
<?php $this->renderPartial('_registerUser', array('model'=>$model)); ?>