<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.activation');
$this->bodyTitle=Yii::t('app','title.activation');
?>
<?php $this->renderPartial('_activation', array('model'=>$model)); ?>