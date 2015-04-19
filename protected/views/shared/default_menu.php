<nav id="mainmenu" class="mainmenu">
<ul>	
    <li class="logo-wrapper"><a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoibdlm.png" /></a></li>
<!--    <li class="logo-wrapper"><a href="<?php echo Yii::app()->request->baseUrl; ?>/">Il<span class="green">bimbetto</span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoibdlm.png" />dove<i>lo<span class="green">metto</span></i>?</a></li>-->
						<li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>/"><?=Yii::t('app','menu.home')?></a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/about"><?=Yii::t('app','menu.aboutus')?></a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/contacts"><?=Yii::t('app','menu.contacts')?></a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/register"><?=Yii::t('app','menu.register')?></a></li>
                                                
</ul>
</nav>