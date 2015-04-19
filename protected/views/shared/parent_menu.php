<nav id="mainmenu" class="mainmenu">
<ul>	
    <li class="logo-wrapper"><a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoibdlm.png" /></a></li>
    <li class="active"><a href="<?php echo URLHelper::getURLRADashboard("ParentManager"); ?>"><?=Yii::t('app','menu.dashboard')?></a></li>
    <li><a href="<?php echo URLHelper::getURLRAParentManageBooks(); ?>"><?=Yii::t('app','menu.manage_books')?></a></li>
    
    <?php echo $this->renderPartial('//shared/account_menu');  ?>

</ul>
</nav>