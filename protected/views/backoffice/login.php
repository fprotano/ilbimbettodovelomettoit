<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'htmlOptions'=>array('role'=>'form')
)); ?>
<fieldset>
                                <div class="form-group">
                                    <?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'E-mail')); ?>
                                    <?php echo $form->error($model,'email'); ?>
<!--                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>-->
                                </div>
                                <div class="form-group">
                                    <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'password')); ?>
                                    <?php echo $form->error($model,'password'); ?>
<!--                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">-->
                                </div>
<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-lg btn-success btn-block')); ?>
<!--                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                            </fieldset>
	

<?php $this->endWidget(); ?>
</div><!-- form -->
<!--
    <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                 Change this to a button or input when using this as a form 
                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>-->