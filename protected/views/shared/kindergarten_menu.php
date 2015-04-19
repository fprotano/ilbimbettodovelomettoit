<nav id="mainmenu" class="mainmenu">
<ul>	
    <li class="logo-wrapper"><a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoibdlm.png" /></a></li>
    <li class="active"><a href="<?php  URLHelper::getURLRADashboard("KindergartenManager"); ?>"><?=Yii::t('app','menu.dashboard')?></a></li>
    <li><a href="<?php echo URLHelper::getURLRAKindergartenManageBooks(); ?>"><?=Yii::t('app','menu.manage_books')?></a></li>
    <li><a href="<?php echo URLHelper::getURLRAKindergartenManagePhotos(); ?>"><?=Yii::t('app','menu.manage_photos')?></a></li>
    <li><a href="<?php echo URLHelper::getURLRAKindergartenManageNews(); ?>"><?=Yii::t('app','menu.manage_news')?></a></li>
    
    <?php echo $this->renderPartial('//shared/account_menu');  ?>
    
    
</ul>
</nav>