<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
$this->pageTitle="Gestione Asilo Nido";
?>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo ($model->isNewRecord) ? "Nuovo Asilo Nido" : "Modifica  Asilo Nido";?>
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
     'htmlOptions'=>array('role'=>'form','enctype'=>'multipart/form-data')
)); ?>

                                     <div class="form-group">
                                         <?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                        <?php echo $form->labelEx($model,'shortDescription'); ?>
		<?php echo $form->textArea($model,'shortDescription',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'shortDescription'); ?>
                                         
                                            <p class="help-block">Inserire la risposta.</p>
                                        </div>
                                    
                <div class="form-group">
                                        <?php echo $form->labelEx($model,'longDescription'); ?>
		<?php echo $form->textArea($model,'longDescription',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'longDescription'); ?>
                                         
                                            <p class="help-block">Inserire la risposta.</p>
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
                                         
                                            <p class="help-block">Inserire la risposta.</p>
                                        </div>
                                    
                                    
                  <div class="form-group">
                                        <?php echo $form->labelEx($model,'provinceCode'); ?>
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
                                         
                                            <p class="help-block">Inserire la risposta.</p>
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
                                         
                                            <p class="help-block">Inserire la risposta.</p>
                                        </div>
                         
                                    
                                    
                                    
                             <div class="form-group">
                                         <?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'address'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                    
                                      <div class="form-group">
                                         <?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                       
                                      <div class="form-group">
                                         <?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mobile'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                      <div class="form-group">
                                         <?php echo $form->labelEx($model,'initialAvailability'); ?>
		<?php echo $form->textField($model,'initialAvailability',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'initialAvailability'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                    
                                     <div class="form-group">
                                         <?php echo $form->labelEx($model,'currentAvailability'); ?>
		<?php echo $form->textField($model,'currentAvailability',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'currentAvailability'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                        <div class="form-group">
                                         <?php echo $form->labelEx($model,'timer'); ?>
		<?php echo $form->textField($model,'timer',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'timer'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                    <div class="form-group">
                                         <?php echo $form->labelEx($model,'contacts'); ?>
		<?php echo $form->textField($model,'contacts',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contacts'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    <div class="form-group">
                                               <?php echo $form->labelEx($model,'joinAmount'); ?>
		<?php echo $form->textField($model,'joinAmount',array('size'=>50,'maxlength'=>100
                    ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'joinAmount'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                    <div class="form-group">
                                               <?php echo $form->labelEx($model,'joinPeriodRef'); ?>
		
                                        
                                        <?php echo $form->dropDownList($model,'joinPeriodRef', CHtml::listData(PeriodRef::model()->findAll(array('order'=>'description')), 'code', 'description')
                    ,array('class'=>'form-control input-medium')); ?> 
                                        
                                        
		<?php echo $form->error($model,'joinPeriodRef'); ?>
                                         
                                            <p class="help-block">Inserire nome struttura.</p>
                                        </div>         
                                    
                                    
                                  <div class="form-group">
                                        <?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->fileField($model,'logo',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'logo'); ?>
                                         
                                             <p class="help-block">Selezionare un file dal pc.
                                                <?php 
                                                
                                                if($model->logo!=""){
                                                    
                                                    $check = "<input type=\"checkbox\" name=\"logo_delete\" value=\"on\"/>";
                                                    echo "<table width=100% cellspacing=\"5\" cellpadding=\"5\" border=\"1\">";
                                                    echo "<tr>";
                                                    echo "<td align=center>File allegato</td>";
                                                    echo "<td align=center>Cancella</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td align=center><b>". substr($model->logo,13)."</b></td>";
                                                    echo "<td align=center>".$check."</td>";
                                                    echo "</tr>";
                                                    echo "</table>";
                                                }?>
                                            </p>
                                        </div>  
                                    
                                      <?php echo CHtml::submitButton( 'Conferma', array('class'=>'btn btn-success')); ?>
                                    <a class="btn btn-danger" href="<?=Yii::app()->baseUrl?>/adminKindergarten/manage" >Annulla</a>
                                 
                                   <?php $this->endWidget(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
</div>
<script language="JavaScript" type="text/javascript">
<!--
$("#Kindergarten_regionId").addClass('form-control');
$("#Kindergarten_provinceCode").addClass('form-control');
$("#Kindergarten_cityId").addClass('form-control');
//-->
</script>
