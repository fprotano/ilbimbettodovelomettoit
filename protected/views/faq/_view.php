<?php
/* @var $this FaqController */
/* @var $data Faq */
?>
<div class="panel panel-default">
<div class="panel-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo CHtml::encode($data->id); ?>">
    <?php echo CHtml::encode($data->question); ?>

</a>
								</div>
<div id="collapse<?php echo CHtml::encode($data->id); ?>" class="accordion-body collapse">
<div class="accordion-inner">
<p><?php echo CHtml::encode($data->answer); ?></p>
</div>
</div>
</div>

