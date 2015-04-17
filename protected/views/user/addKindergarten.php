<?php
/* @var $this KindergartenController */
/* @var $model Kindergarten */
$this->pageTitle=Yii::t('app','title.info_kindergarten');
$this->bodyTitle=Yii::t('app','title.info_kindergarten');
?>
<?php $this->renderPartial('_addKindergarten', array('model'=>$model)); ?>