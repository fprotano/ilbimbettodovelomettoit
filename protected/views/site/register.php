<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$baseUrl= Yii::app()->baseUrl;
$this->pageTitle=Yii::app()->name . " - Registrati";
$this->bodyTitle="Registrati";
$this->bodyImage="<img src=\"".Yii::app()->request->baseUrl."/themes/default/img/image_intro_register.png\"/>";

?>
 	     					<p>
							Il nostro obiettivo è quello di creare una connessione tra le famiglie e le strutture abilitate all'accoglienza di bambini.
                                                        <br/>
                                                        
						</p>
                                                
                                                
         <div class="section blog-posts-wrapper">
	    	<div class="container">
				<div class="row">
					<!-- Post -->
					<div class="col-md-4 col-sm-6">
						<div class="blog-post">
							<!-- Post Info -->
<!--							<div class="post-info">
								<div class="post-date">
									<div class="date">30 JAN, 2013</div>
								</div>
								<div class="post-comments-count">
									<a href="page-blog-post-right-sidebar.html" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>11</a>
								</div>
							</div>-->
							<!-- End Post Info -->
							<!-- Post Image -->
                                                        <a href="<?php echo URLHelper::getURLRegisterKindergarten(); ?>"><img src="<?php echo $baseUrl; ?>/themes/default/img/index_icon_kindergarten.png" class="post-image" alt="Post Title"></a>
							<!-- End Post Image -->
							<!-- Post Title & Summary -->
							<div class="post-title">
								<h3><a href="<?php echo URLHelper::getURLRegisterKindergarten(); ?>">Registrazione Asilo Nido</a></h3>
							</div>
							<div class="post-summary">
								<p>Hai un asilo nido o una struttura equivalente? registrati sul nostro e scopri i servizi che ti offriamo.
                                                                    <br/>
                                                                <li>Potrai farti trovare dalle famiglie che cercano una struttura accogliente per il loro bambino</li>
                                                                <li>Potrai gestire la prenotazione dei posti nella tua struttura</li>
                                                                <li>Potrai inserire delle novità o dare delle comunicazioni che riguardano la tua struttura</li>
                                                                </p>
							</div>
							<!-- End Post Title & Summary -->
							<div class="post-more">
								<a href="<?php echo URLHelper::getURLRegisterKindergarten(); ?>" class="btn btn-small">Registrati Gratis!</a>
							</div>
						</div>
					</div>
					<!-- End Post -->
					<div class="col-md-4 col-sm-6">
						<div class="blog-post">
<!--							<div class="post-info">
								<div class="post-date">
									<div class="date">30 JAN, 2013</div>
								</div>
								<div class="post-comments-count">
									<a href="page-blog-post-right-sidebar.html" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>16</a>
								</div>
							</div>-->
							<a href="<?php echo URLHelper::getURLRegisterParent(); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/index_icon_family.png" class="post-image" alt="Post Title"></a>
							<div class="post-title">
								<h3><a href="<?php echo URLHelper::getURLRegisterParent(); ?>">Registrazione Famiglie</a></h3>
							</div>
							<div class="post-summary">
								<p>Sei un genitore?.</p>
							</div>
							<div class="post-more">
								<a href="<?php echo URLHelper::getURLRegisterParent(); ?>" class="btn btn-small">Registrati Gratis!</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="blog-post">
<!--							<div class="post-info">
								<div class="post-date">
									<div class="date">30 JAN, 2013</div>
								</div>
								<div class="post-comments-count">
									<a href="page-blog-post-right-sidebar.html" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>57</a>
								</div>
							</div>-->
<a href="<?php echo URLHelper::getURLRegisterBabysitter(); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/index_icon_babysitter.png" class="post-image" alt="Post Title"></a>
							<div class="post-title">
								<h3><a href="<?php echo URLHelper::getURLRegisterBabysitter(); ?>">Registrazione Babysitters</a></h3>
							</div>
							<div class="post-summary">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.</p>
							</div>
							<div class="post-more">
								<a href="<?php echo URLHelper::getURLRegisterBabysitter(); ?>" class="btn btn-small">Registrati Gratis!</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
	    </div>
                                        
                                </div>
                </div>
        </div>
