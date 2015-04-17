<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::app()->name . " - Registrazione Babysitter ";
$this->bodyTitle="Registrazione Babysitter";
?>
<?php $this->renderPartial('_registerUser', array('model'=>$model)); ?>