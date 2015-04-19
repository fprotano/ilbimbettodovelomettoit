<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.change_password');
$this->bodyTitle=Yii::t('app','title.change_password');
?>
<?php $this->renderPartial('_changePassword', array('model'=>$model,'modelExtras'=>$modelExtras)); ?>