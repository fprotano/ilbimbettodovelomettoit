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

            echo  $form->dropDownList(
                     $model
                     ,'provinceCode',
 CHtml::listData(Province::model()->findAll(),'id','description'),
                    array(
                      'id'=>'Kindergarten_provinceCode',
                      'prompt'=>'-- --',
                      'ajax' => array(
                        'type'=>'POST',
                        'url'=>CController::createUrl(URLHelper::getURLGetCitiesForKindergarten(false)),
                        'update'=>'#'.CHtml::activeId($model,'cityId'), //jurusan_id = field jurusan_id
                        'beforeSend'=>'function() { 
                          $("#User_cityId").find("option").remove();
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
                                                                    <?php echo $form->labelEx($model,'shortDescription'); ?>
		<?php echo $form->textArea($model,'shortDescription',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'shortDescription'); ?>
                                                                    

								</div>

 			
								<div class="form-group">
                                                                    <?php echo $form->labelEx($model,'longDescription'); ?>
		<?php echo $form->textArea($model,'longDescription',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'longDescription'); ?>
                                                                    

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
		<?php echo $form->labelEx($model,'initialAvailability'); ?>
		<?php echo $form->textField($model,'initialAvailability',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'initialAvailability'); ?>
	</div>
                                                    
                                     
        <div class="form-group">
		<?php echo $form->labelEx($model,'contacts'); ?>
		<?php echo $form->textField($model,'contacts',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contacts'); ?>
	</div>
                                                    
      
                                                    
                                                    
                                                
                                                    
                                                    
                                                    <div class="form-group">
		<?php echo $form->labelEx($model,'currentAvailability'); ?>
		<?php echo $form->textField($model,'currentAvailability',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'currentAvailability'); ?>
	</div>
                                                    
                                                    
                                                    
								<div class="form-group">
									<button type="submit" class="btn pull-right"><?=Yii::t('app','buttons.register');?></button>
									<div class="clearfix"></div>
								</div>
							
                                                    <?php $this->endWidget(); ?>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1 social-login">
						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>
					</div>
				</div>
