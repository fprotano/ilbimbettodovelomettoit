<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name ;
//$this->breadcrumbs=array(
//	'Contact',
//);
?>
 <!-- Homepage Slider -->
        <div class="homepage-slider text-center banner_container">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/banner.png"/>
        </div>
        <!-- End Homepage Slider -->

		<!-- Press Coverage -->
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="in-press">
							<a href="#">Ho aperto un asilo nido ma ho difficoltà a farmi trovare dalle famiglie.</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="in-press">
							<a href="#">Devo iscrivere il mio bimbo ad asilo nido ma non ho tempo per trovarlo.</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="in-press">
							<a href="#">Vorrei trovare una stabile occupazione come babysitter ma non so come.</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Press Coverage -->

		<!-- Services -->
        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/index_icon_kindergarten.png" alt="Service 1">
		        			<h3>Gestisci un asilo nido?</h3>
		        			<p>Il nostro sito ti fa trovare dalle famiglie che sono alla ricerca di un posto per il loro bimbo.</p>
		        			<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/introKindergarten" class="btn">Scopri come</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/index_icon_family.png" alt="Sei un genitore">
		        			<h3>Sei un genitore?</h3>
		        			<p>Il nostro sito ti aiuta a cercare l'asilo nido più adatto ad accogliere il tuo bimbo</p>
		        			<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/introParent" class="btn">Scopri come</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/img/index_icon_babysitter.png" alt="Service 3">
		        			<h3>Sei una babysitter?</h3>
		        			<p>Il nostro sito ti mette in contatto con famiglie che non sanno a chi affidare il loro bimbo</p>
		        			<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/introBabysitter" class="btn">Scopri come</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->

		<!-- Call to Action Bar -->
	    <div class="section section-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>Sei già registrato? 
                                                            
                                                        </h3> <a href="<?php echo URLHelper::getURLLogin(); ?>" class="btn btn-orange">Accedi</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->

	
