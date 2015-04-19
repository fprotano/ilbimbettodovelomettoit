<?php
/* @var $this SiteController */
/* @var $model Contacts */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . " - Contatti ";
$this->bodyTitle="Contatti ";
$this->bodyImage="<img src=\"".Yii::app()->request->baseUrl."/themes/default/img/image_contacts.png\"/>";
?>

<?php if(Yii::app()->user->hasFlash('contacts')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contacts'); ?>
</div>

<?php else: ?>

<p>
Se vuoi saperne di più scrivi nella form ed inviaci le domande, sarai contattato al più presto. Grazie.
</p>

<div class="form">

   <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
       )); ?>
        <?php echo $form->errorSummary($model); ?>
       
        <div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Inserisci le lettere come compaiono nell'immagine sopra.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
            <?php echo CHtml::submitButton('Invia',array('class'=>'btn')); ?>
	</div>
        
<?php $this->endWidget(); ?>
</div><!-- form -->           
<!-- End Call to Action Bar -->

<?php endif; ?>	
