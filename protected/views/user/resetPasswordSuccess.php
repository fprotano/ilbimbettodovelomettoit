<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::t('app','title.reset_password_success');
$this->bodyTitle=Yii::t('app','title.reset_password_success');
$this->bodyImage="<img src=\"".Yii::app()->request->baseUrl."/themes/default/img/image_register_success.png\"/>";

?>
<p>
<?=Yii::t('app','body.reset_password_success')?>
    
    <br/>
<hr/>
<br/>
<a href="<?php echo URLHelper::getURLLogin(); ?>" class="btn btn-small"><?=Yii::t('app','links.login')?></a>
      


</p>