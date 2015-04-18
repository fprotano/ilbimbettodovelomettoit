<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.register_kindergarten');
$this->bodyTitle=Yii::t('app','title.register_kindergarten');
?>
<?php $this->renderPartial('_registerUser', array('model'=>$model,'modelExtras'=>$modelExtras)); ?>