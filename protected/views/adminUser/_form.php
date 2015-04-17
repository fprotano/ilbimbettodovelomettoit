<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
$this->pageTitle="Gestione Utenti";
?>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo ($model->isNewRecord) ? "Nuovo Utente" : "Modifica Utente";?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
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
                                         <?php echo $form->labelEx($model,'enabled'); ?>
                 <?php echo $form->checkBox($model,'enabled', 
                         array('value'=>'S', 'uncheckValue'=>'N','class'=>'form-control')); ?>
		
		<?php echo $form->error($model,'enabled'); ?>
                                         
                                            <p class="help-block">.</p>
                                        </div>
                                    
                                    
                                        
                                    
                                      <?php echo CHtml::submitButton( 'Conferma', array('class'=>'btn btn-success')); ?>
                                    <a class="btn btn-danger" href="<?=  URLHelper::getURLAdminUser('manage')?>" >Annulla</a>
                                 
                                   <?php $this->endWidget(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
</div>
