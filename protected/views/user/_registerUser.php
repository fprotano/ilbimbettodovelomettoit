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
                                                                    <?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
                                                                    

								</div>

                                                    
                                                    	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	

<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'alternativeEmail'); ?>
		<?php echo $form->textField($model,'alternativeEmail',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'alternativeEmail'); ?>
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'questionId'); ?>
	
            <?php echo $form->dropDownList($model,'questionId', CHtml::listData(Question::model()->findAll(), 'id', 'description')
                    ,array('class'=>'form-control')); ?> 
		<?php echo $form->error($model,'questionId'); ?>
            
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textField($model,'answer',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer'); ?>
	</div>

        
        
<div class="form-group">
		<?php echo $form->labelEx($model,'regionId'); ?>
            <?php
 echo $form->dropDownList($model,'regionId',
 CHtml::listData(Region::model()->findAll(),'id','description'),
 array(
   'id'=>'User_regionId',
   'prompt'=>'-- --',
   'ajax' => array(
     'type'=>'POST',
     'url'=>CController::createUrl(URLHelper::getURLGetProvinces(false)), 
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
                      'id'=>'User_provinceCode',
                      'prompt'=>'-- --',
                      'ajax' => array(
                        'type'=>'POST',
                        'url'=>CController::createUrl(URLHelper::getURLGetCities(false)),
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
            echo CHtml::activeDropDownList($model, 'cityId', $cityItems, array('id'=>'User_cityId','prompt'=>'-')
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
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'site'); ?>
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
