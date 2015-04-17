<?php
/* @var $this NewsController */
/* @var $model News */
//
//$this->breadcrumbs=array(
//	'News'=>array('index'),
//	$model->title,
//);
//
//$this->menu=array(
//	array('label'=>'List News', 'url'=>array('index')),
//	array('label'=>'Create News', 'url'=>array('create')),
//	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage News', 'url'=>array('admin')),
//);

$newsUrl =  Yii::app()->baseUrl."/upload/news/";
$baseUrl =  Yii::app()->baseUrl."/";
$picture = ($model->picture=="") ? $baseUrl ."images/no_picture.png" :$newsUrl . $model->picture;
                                                    

?>
<div class="single-post-title">
								<h3><?php echo CHtml::encode($model->title); ?></h3>
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>3<?php echo CHtml::encode($model->createdAt); ?>
							</div>
							<div class="single-post-image">
								<img src="<?=$picture?>" alt="<?php echo CHtml::encode($model->title); ?>">
							</div>
							<div class="single-post-content">
								<?php echo CHtml::encode($model->description); ?>
							</div>
