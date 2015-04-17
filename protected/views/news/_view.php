<?php
/* @var $this NewsController */
/* @var $data News */

$newsUrl =  Yii::app()->baseUrl."/upload/news/";
$baseUrl =  Yii::app()->baseUrl."/";

?>


<div class="row">
	        				<div class="col-xs-4">
                                                    <?php 
                                                    $picture = ($data->picture=="") ? "images/no_picture.png" :$newsUrl . $data->picture;
                                                    
                                                   ?>
                                                    <a href="<?=$baseUrl?>news/<?php echo CHtml::encode($data->id); ?>"><img src="<?=$picture?>" alt="<?php echo CHtml::encode($data->title); ?>"></a>
                                                </div>
	        				<div class="col-xs-8">
	        					<div class="caption"><a href="page-blog-post-right-sidebar.html"><?php echo CHtml::encode($data->title); ?></a></div>
	        					<div class="date"><?php echo CHtml::encode($data->createdAt); ?> </div>
	        					<div class="intro"><?php echo CHtml::encode($data->abstract); ?> <?php echo CHtml::link("Leggi", array('view', 'id'=>$data->id)); ?></div>
	        				</div>
	        			</div>
