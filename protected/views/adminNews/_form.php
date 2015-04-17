<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
$this->pageTitle="Gestione News";
?>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo ($model->isNewRecord) ? "Nuova News" : "Modifica News";?>
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
     'htmlOptions'=>array('role'=>'form','enctype'=>'multipart/form-data')
)); ?>

                                     <div class="form-group">
                                         <?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>70
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
                                         
                                            <p class="help-block">Inserire titolo.</p>
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                        <?php echo $form->labelEx($model,'abstract'); ?>
		<?php echo $form->textArea($model,'abstract',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'abstract'); ?>
                                         
                                            <p class="help-block">Inserire testo breve.Questo testo verrà usato negli elenchi</p>
                                        </div>
                                    
                                     <div class="form-group">
                                        <?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'description'); ?>
                                         
                                            <p class="help-block">Inserire testo breve.Questo testo verrà usato nel dettaglio</p>
                                        </div>
                                    
                                    
                                     <div class="form-group">
                                        <?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->fileField($model,'picture',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'picture'); ?>
                                         
                                             <p class="help-block">Selezionare un file dal pc.
                                                <?php 
                                                
                                                if($model->picture!=""){
                                                    
                                                    $check = "<input type=\"checkbox\" name=\"picture_delete\" value=\"on\"/>";
                                                    echo "<table width=100% cellspacing=\"5\" cellpadding=\"5\" border=\"1\">";
                                                    echo "<tr>";
                                                    echo "<td align=center>File allegato</td>";
                                                    echo "<td align=center>Cancella</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td align=center><b>". substr($model->picture,13)."</b></td>";
                                                    echo "<td align=center>".$check."</td>";
                                                    echo "</tr>";
                                                    echo "</table>";
                                                }?>
                                            </p>
                                        </div>
                                    
                                     <div class="form-group">
                                        <?php echo $form->labelEx($model,'attachment'); ?>
		<?php echo $form->fileField($model,'attachment',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'attachment'); ?>
                                         
                                            <p class="help-block">Selezionare un file dal pc.
                                                <?php 
                                                
                                                if($model->attachment!=""){
                                                    
                                                    $check = "<input type=\"checkbox\" name=\"attachment_delete\" value=\"on\"/>";
                                                    echo "<table width=100% cellspacing=\"5\" cellpadding=\"5\" border=\"1\">";
                                                    echo "<tr>";
                                                    echo "<td align=center>File allegato</td>";
                                                    echo "<td align=center>Cancella</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td align=center><b>". substr($model->attachment,13)."</b></td>";
                                                    echo "<td align=center>".$check."</td>";
                                                    echo "</tr>";
                                                    echo "</table>";
                                                }?>
                                            </p>
                                        </div>
                                    
                                    
                                      <?php echo CHtml::submitButton( 'Conferma', array('class'=>'btn btn-success')); ?>
                                    <a class="btn btn-danger" href="<?=Yii::app()->baseUrl?>/adminNews/manage" >Annulla</a>
                                 
                                   <?php $this->endWidget(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
</div>
