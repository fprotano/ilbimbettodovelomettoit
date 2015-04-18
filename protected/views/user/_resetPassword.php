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
                                                                    <?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
                                                                    

								</div>
   
                                                    
								<div class="form-group">
									<button type="submit" class="btn pull-right"><?=Yii::t('app','buttons.reset_password');?></button>
									<div class="clearfix"></div>
								</div>
							
                                                    <?php $this->endWidget(); ?>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1 extra-login">
						<p><?=Yii::t('app','body.not_registered_yet');?></p>
						<div class="extra-login-buttons">
							<a href="<?=URLHelper::getURLRegisterIntro()?>" class="btn-01"><?=Yii::t('app','buttons.register');?></a>
							
						</div>
					</div>
				</div>
