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

		      <?php 
                      
                      $userProfileId = YII::app()->session["userProfileId"];
                      
                      if($userProfileId==Profile::$BABYSITTER)
                          echo $this->renderPartial('//shared/babysitter_menu'); 
                      if($userProfileId==Profile::$KINDERGARTEN)
                          echo $this->renderPartial('//shared/kindergarten_menu'); 
                      if($userProfileId==Profile::$PARENT)
                          echo $this->renderPartial('//shared/parent_menu'); 
                      
                      ?>
			</div>
		</div>

        
                   <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo $this->bodyTitle; ?></h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6">
                                             <?php echo $content; ?>
						
					</div>
					<div class="col-sm-6">
						<div class="image-wrapper">
                                                    <?php echo $this->bodyImage; ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
                       
		
    
	  <?php echo $this->renderPartial('//shared/footer');  ?>

    </body>
</html>

