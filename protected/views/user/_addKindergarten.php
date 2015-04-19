<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<div class="row">
					<div class="col-sm-8">
						<div class="basic-login">
                                                    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('role'=>'form')
)); ?>
							
								<div class="form-group">
                                                                    <?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
                                                                    

								</div>

                                                    
<div class="form-group">
		<?php echo $form->labelEx($model,'regionId'); ?>
            <?php
 echo $form->dropDownList($model,'regionId',
 CHtml::listData(Region::model()->findAll(),'id','description'),
 array(
   'id'=>'Kindergarten_regionId',
   'prompt'=>'-- --',
   'ajax' => array(
     'type'=>'POST',
     'url'=>CController::createUrl(URLHelper::getURLGetProvincesForKindergarten(false)), 
     'update'=>'#'.CHtml::activeId($model,'provinceCode'), 
     'beforeSend'=>'function() { 
       $("#User_provinceCode").find("option").remove();
       $("#User_cityId").find("option").remove();
     }', 
   )
 )
    ,array('class'=>'form-control')
 );
 ?>
        
            
		<?php echo $form->error($model,'regionId'); ?>
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'provinceCode'); ?>
            
            <?php
//
//            echo  $form->dropDownList(
//                     $model
//                     ,'provinceCode',
// CHtml::listData(Province::model()->findAll(),'id','description'),
//                    array(
//                      'id'=>'Kindergarten_provinceCode',
//                      'prompt'=>'-- --',
//                      'ajax' => array(
//                        'type'=>'POST',
//                        'url'=>CController::createUrl(URLHelper::getURLGetCitiesForKindergarten(false)),
//                        'update'=>'#'.CHtml::activeId($model,'cityId'), //jurusan_id = field jurusan_id
//                        'beforeSend'=>'function() { 
//                          $("#User_cityId").find("option").remove();
//                        }', 
//                      )
//     )
//  
//  ,array('class'=>'form-control')
// );
//            
//             
//            
             
             
            ?>
    
      <?php


$provinceCodeList = ($model->regionId!="") ? CHtml::listData(Province::model()->findByRegionId($model->regionId),'code','description'):   array();

      
 echo $form->dropDownList($model,'provinceCode',
 $provinceCodeList,
 array(
   'id'=>'Kindergarten_provinceCode',
   'prompt'=>'-- --',
   'ajax' => array(
     'type'=>'POST',
     'url'=>CController::createUrl(URLHelper::getURLGetCitiesForKindergarten(false)), 
     'update'=>'#'.CHtml::activeId($model,'cityId'), 
     'beforeSend'=>'function() { 
       
       $("#Kindergarten_cityId").find("option").remove();
     }', 
   )
 )
    ,array('class'=>'form-control')
 );
 ?>
    
    
		
		<?php echo $form->error($model,'provinceCode'); ?>
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'cityId'); ?>
	<?php

            $cityItems = CHtml::listData(City::model()->findAll(
                    'provinceCode=:provinceCode', array(':provinceCode'=>$model->provinceCode)), 'id', 'description');
            echo CHtml::activeDropDownList($model, 'cityId', $cityItems, array('id'=>'Kindergarten_cityId','prompt'=>'-')
                    ,array('class'=>'form-control'));
        
            ?>
            
		<?php echo $form->error($model,'cityId'); ?>
	</div>
        
        
<div class="form-group">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
                                                    
                                                    		
                                                    
                                                    
<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
                                                    
                                                    
                                                                                 
<div class="form-group">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
                                  
                                                    
                                                                                  
        <div class="form-group">
		<?php echo $form->labelEx($model,'contacts'); ?>
		<?php echo $form->textField($model,'contacts',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contacts'); ?>
	</div>
                                                    
                                                    
                                                    	
								<div class="form-group">
                                                                    <?php echo $form->labelEx($model,'shortDescription'); ?>
		<?php echo $form->textArea($model,'shortDescription',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'shortDescription'); ?>
                                                                    
<div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_short_description')?>
                                                        </div>
								</div>

 			
								<div class="form-group">
                                                                    <?php echo $form->labelEx($model,'longDescription'); ?>
		<?php echo $form->textArea($model,'longDescription',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'longDescription'); ?>
                                                                    
<div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_long_description')?>
                                                        </div>
								</div>

                    

        <div class="form-group">
		<?php echo $form->labelEx($model,'initialAvailability'); ?>
		<?php echo $form->textField($model,'initialAvailability',array('size'=>60,'maxlength'=>150,'class'=>'form-control input-sm input-micro')); ?>
		<?php echo $form->error($model,'initialAvailability'); ?>
                                                        <div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_initial_availability')?>
                                                        </div>
	</div>
                                                    
                                       
      
                                                    
                                                    
                                                
                                                    
                                                    
         <div class="form-group">
		<?php echo $form->labelEx($model,'currentAvailability'); ?>
		<?php echo $form->textField($model,'currentAvailability',array('size'=>60,'maxlength'=>150,'class'=>'form-control input-sm input-micro')); ?>
		<?php echo $form->error($model,'currentAvailability'); ?>
                                                        
                                                        <div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_current_availability')?>
                                                        </div>
	</div>
                                                    
                                                    
        <div class="form-group">
		<?php echo $form->labelEx($model,'timer'); ?>
		<?php echo $form->textField($model,'timer',array('size'=>60,'maxlength'=>150,'class'=>'form-control input-sm input-micro')); ?>
		<?php echo $form->error($model,'timer'); ?>
                                                        
                                                        <div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_timer')?>
                                                        </div>
	</div>
                                                    
        <div class="form-group">
		<?php echo $form->labelEx($model,'joinAmount'); ?>
		<?php echo $form->textField($model,'joinAmount',array('size'=>60,'maxlength'=>150,'class'=>'form-control input-sm input-micro')); ?>
		<?php echo $form->error($model,'joinAmount'); ?>
                                                        
                                                        <div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_join_amount')?>
                                                        </div>
	</div>
                                                    
                                                    
<div class="form-group">
		<?php echo $form->labelEx($model,'joinPeriodRef'); ?>
	
            <?php echo $form->dropDownList($model,'joinPeriodRef', CHtml::listData(PeriodRef::model()->findAll(array('order'=>'description')), 'code', 'description')
                    ,array('class'=>'form-control input-medium')); ?> 
		<?php echo $form->error($model,'joinPeriodRef'); ?>
    
     <div class="help-text">
                                                            <i class="glyphicon glyphicon-info-sign icon-white"></i> 
                                                            <?=Yii::t('app','help.enter_join_period_ref')?>
                                                        </div>
            
	</div>
        
        
                                                    
								<div class="form-group">
									<button type="submit" class="btn pull-right"><?=Yii::t('app','buttons.save');?></button>
									<div class="clearfix"></div>
								</div>
							
                                                    <?php $this->endWidget(); ?>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1 extra-login">
<!--						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>-->
					</div>
				</div>
<script language="JavaScript" type="text/javascript">
<!--
$("#Kindergarten_regionId").addClass('form-control');
$("#Kindergarten_provinceCode").addClass('form-control');
$("#Kindergarten_cityId").addClass('form-control');
//-->
</script>
