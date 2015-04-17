<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::t('app','title.register_success');
$this->bodyTitle=Yii::t('app','title.register_success');
$this->bodyImage="<img src=\"".Yii::app()->request->baseUrl."/themes/default/img/image_register_success.png\"/>";

?>
<p>
<?=Yii::t('app','body.register_success')?>
<br/>
<hr/>
<br/>
<a href="<?php echo URLHelper::getURLActivation(); ?>" class="btn btn-small"><?=Yii::t('app','links.activate_account')?></a>
                                                       
</p>