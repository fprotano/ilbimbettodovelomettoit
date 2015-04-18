<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.reset_password');
$this->bodyTitle=Yii::t('app','title.reset_password');
?>
<?php $this->renderPartial('_resetPassword', array('model'=>$model)); ?>