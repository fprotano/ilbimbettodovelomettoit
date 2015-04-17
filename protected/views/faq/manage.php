<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faqs',
);

$this->menu=array(
	array('label'=>'Create Faq', 'url'=>array('create')),
	array('label'=>'Manage Faq', 'url'=>array('admin')),
);

$this->pageTitle="Gestione FAQ";
?>


 <div class="panel panel-default">
                        <div class="panel-heading">
                            Elenco FAQ
                        </div>
     
      <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                
                                

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
         'filter' => null,
        'summaryText' => 'Visualizzo  da {start} a {end} id {count} records',
        'itemsCssClass' => 'table table-striped table-bordered table-hover',

        'pager'=>array(
            'class'=>'CLinkPager',
            'pageSize' => 2,
            'firstPageLabel'=>'|&laquo;',
            'lastPageLabel'=>'&raquo;',
            'nextPageLabel'=>'&raquo;&raquo;',
            'prevPageLabel'=>'&laquo;&laquo;',
            'header'=>'',

        ),
        'columns' => array(
             
		array(
                        'header'=>'Domanda',
			'name' => 'question',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->question)'
		),
            
array
(
    'class'=>'CButtonColumn',
    'template'=>'{update}{delete}',
),

	),
	
)); ?>
                                
                                
                               
                            </div>
                        
      
      <div class="well">
          <a class="btn btn-primary" href="<?=Yii::app()->baseUrl?>/faq/create" >Aggiungi FAQ</a>
      </div>
                            
       </div>
      
 </div>
