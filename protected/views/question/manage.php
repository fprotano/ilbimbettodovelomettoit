<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */



$this->pageTitle="Gestione Domande";
?>


 <div class="panel panel-default">
                        <div class="panel-heading">
                            Elenco Domande
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
			'name' => 'description',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->description)'
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
          <a class="btn btn-primary" href="<?=Yii::app()->baseUrl?>/question/create" >Aggiungi Domanda</a>
      </div>
                            
       </div>
      
 </div>
