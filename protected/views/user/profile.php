<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.profile');
$this->bodyTitle=Yii::t('app','title.profile');
?>
<?php $this->renderPartial('_profile', array('model'=>$model)); ?>