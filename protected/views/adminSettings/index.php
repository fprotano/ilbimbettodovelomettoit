<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
$this->pageTitle="Impostazioni";
?>
<?php if(Yii::app()->user->hasFlash('message')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>

<?php endif; ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modifica Impostazioni
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
     'htmlOptions'=>array('role'=>'form')
)); ?>

                                     <div class="form-group">
                                         <?php echo $form->labelEx($model,'mailFromDefault'); ?>
		<?php echo $form->textField($model,'mailFromDefault',array('size'=>60,'maxlength'=>70
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mailFromDefault'); ?>
                                         
                                            <p class="help-block">Inserire indirizzo email.</p>
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                        <?php echo $form->labelEx($model,'mailFromDefaultName'); ?>
		<?php echo $form->textField($model,'mailFromDefaultName',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mailFromDefaultName'); ?>
                                         
                                            <p class="help-block">Inserire nome visibile</p>
                                        </div>
                                    
                                  
                                      <?php echo CHtml::submitButton( 'Salva', array('class'=>'btn btn-success')); ?>
                                    
                                 
                                   <?php $this->endWidget(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
</div>
