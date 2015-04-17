<?php
$this->pageTitle=Yii::app()->name . " - Risposte a domande frequenti";
$this->bodyTitle=" FAQ";
$this->bodyImage="";


?>

<div class="row">
<div class="col-md-12 faq-wrapper">
<div class="panel-group" id="accordion2">
<h3>Risposte a domande frequenti</h3>
<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'template'=>'{items}',
)); ?>
</div>
</div>
</div>
