<?php
$this->pageTitle=Yii::app()->name . " - News";
$this->bodyTitle=" News";
$this->bodyImage="";


?>

<div class="row">
<div class="col-sm-12 featured-news">
<h2>News</h2>
<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'template'=>'{items}',
)); ?>
</div>
</div>
