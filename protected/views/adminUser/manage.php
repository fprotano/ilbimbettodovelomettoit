<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */


$this->pageTitle="Gestione Utenti";
?>


 <div class="panel panel-default">
                        <div class="panel-heading">
                            Elenco Utenti
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
                        'header'=>'Email',
			'name' => 'email',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->email)'
		),
            
array
(
    'class'=>'CButtonColumn',
    'template'=>'{update}{delete}',
),

	),
	
)); ?>
                                
                                
                               
                            </div>
                        
      
<!--      <div class="well">
          <a class="btn btn-primary" href="<?=Yii::app()->baseUrl?>/adminNews/create" >Aggiungi News</a>
      </div>-->
                            
       </div>
      
 </div>
