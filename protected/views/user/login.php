<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.login');
$this->bodyTitle=Yii::t('app','title.login');
?>
<?php $this->renderPartial('_login', array('model'=>$model)); ?>