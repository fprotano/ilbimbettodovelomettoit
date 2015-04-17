<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        
         <?php echo $this->renderPartial('//shared/default_head');  ?>
        
    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">

		        
					    <?php echo $this->renderPartial('//shared/default_menu');  ?>
					
				
			</div>
		</div>

		<?php echo $content; ?>
		
    
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
                            
		    		<div class="col-footer col-md-6 col-xs-6">
		    			<h3>Altro</h3>
		    			<ul class="no-list-style footer-navigate-section">
                                            	<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/termsAndConditions">Termini e condizioni</a></li>
                                                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/faq">FAQ</a></li>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contatti</h3>
		    			<p class="contact-us-details">
	        				<b>Web:</b> http://www.bsolutions.it<br/>
	        				<b>Email:</b> <a href="mailto:info@bsolutions.it">info@bsolutions.it</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Rimani in contatto</h3>
		    			<ul class="footer-stay-connected no-list-style">
                                            <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/icon_mini_app_android.png" alt="Scarica app per android" />
                                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/icon_mini_app_ios.png" alt="Scarica app per ios"/>
                                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/icon_mini_app_windows.png" alt="Scarica app per windows phone" />
                                                </li>
                                                <li>
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/icon_mini_fb.png" alt="Seguici su Facebook" />        
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/icon_mini_twitter.png" alt="Seguici su Twitter" />        
                                                </li>
		    				
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2015 IlBimbettodovelometto.it. Tutti i diritti sono riservati.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/jquery.fitvids.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/jquery.sequence-min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/jquery.bxslider.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/main-menu.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/template.js"></script>

    </body>
</html>

