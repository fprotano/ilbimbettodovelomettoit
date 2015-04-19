<?php
/* @var $this UserController */
/* @var $model User */
/* @var $modelExtras stdClass */
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
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
           
 <div class="form-group">
		<?php echo $form->labelEx($modelExtras,'passwordRepeat'); ?>
		<?php echo $form->passwordField($modelExtras,'passwordRepeat',array('size'=>60,'maxlength'=>70,'class'=>'form-control')); ?>
		<?php echo $form->error($modelExtras,'passwordRepeat'); ?>
	</div>	
	

                                                    
								<div class="form-group">
									<button type="submit" class="btn pull-right"><?=Yii::t('app','buttons.save');?></button>
									<div class="clearfix"></div>
								</div>
							
                                                    <?php $this->endWidget(); ?>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1 extra-login">
						
<!--						<div class="extra-login-buttons">
						
							
						</div>-->
					</div>
				</div>
<script language="JavaScript" type="text/javascript">
<!--
$("#User_regionId").addClass('form-control');
$("#User_provinceCode").addClass('form-control');
$("#User_cityId").addClass('form-control');
//-->
</script>
