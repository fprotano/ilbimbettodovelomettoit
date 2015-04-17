<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
$this->pageTitle="Gestione FAQ";
?>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo ($model->isNewRecord) ? "Nuova FAQ" : "Modifica Faq";?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faq-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
     'htmlOptions'=>array('role'=>'form')
)); ?>

                                     <div class="form-group">
                                         <?php echo $form->labelEx($model,'question'); ?>
		<?php echo $form->textField($model,'question',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'question'); ?>
                                         
                                            <p class="help-block">Inserire la domanda.</p>
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                        <?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textArea($model,'answer',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer'); ?>
                                         
                                            <p class="help-block">Inserire la risposta.</p>
                                        </div>
                                      <?php echo CHtml::submitButton( 'Conferma', array('class'=>'btn btn-success')); ?>
                                    <a class="btn btn-danger" href="<?=Yii::app()->baseUrl?>/adminFaq/manage" >Annulla</a>
                                 
                                   <?php $this->endWidget(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
</div>
