<?php

use yii\helpers\Html;

use yii\widgets\Pjax;
use yii\grid\GridView;
use branchonline\lightbox\Lightbox;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="content-index">


    <p>
        <!-- <?= Html::a(Yii::t('app', 'Create Content'), ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php Pjax::begin(); ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'options' => [
            'class' => 'table-responsive',
        ],
      

        'pager' => [
            'options'=>['class'=>'pagination','style' => 'width:100%'],   // set clas name used in ui list of pagination
            'prevPageLabel' => 'Previous',   // Set the label for the "previous" page button
            'nextPageLabel' => 'Next',   // Set the label for the "next" page button
            'firstPageLabel'=>'First',   // Set the label for the "first" page button
            'lastPageLabel'=>'Last',    // Set the label for the "last" page button
            'nextPageCssClass'=>'Next',    // Set CSS class for the "next" page button
            'prevPageCssClass'=>'Previous',    // Set CSS class for the "previous" page button
            'firstPageCssClass'=>'First',    // Set CSS class for the "first" page button
            'lastPageCssClass'=>'Last',    // Set CSS class for the "last" page button
         ],     
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'headerOptions' => ['class' => 'text-center'],
                'attribute'=>'Picture',
                        'options'=>['style'=>['width'=>'15%']],
                'contentOptions' => ['class' => 'text-center'],
                'format'=>'raw',
                        'value'=>function($model){
        
                    return Lightbox::widget([
                        'files' => [
                            [
                                'thumb' => $model->getPhotoViewer(),
                                'thumbOptions' => ['class'=>'img-thumbnail','width'=>'110','height'=>'110'],
                                'original' => $model->getPhotoViewer(),
                            
                            ],
                        ]
                    ]);
                    }
                ],
  
            [
           
                'attribute'=> 'title',
                'format' => 'html',
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
           
                'attribute'=>'introtext',
                'format' => 'html',
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
              
                'attribute'=>'fulltext',
                'format' => 'raw',
                'headerOptions' => ['class' => 'text-center'],
             
            ],
            [
              
                'attribute'=>'publish_up',
                'headerOptions' => ['class' => 'text-center'],
            
            ],
            [
              
                'attribute'=>'publish_down',
                'headerOptions' => ['class' => 'text-center'],
            
            ],
           
           

            [
                'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center'],
                'format' => 'html',
                'header'=>'State',
                'value'=> function($model){
                    if($model->state == 2)
                    {
                        return "<div style='color:Red;'>Unpublished</div>";
                    }
                    else{
                        return "<div style='color:Green;'>Published</div>";
                    }

                }            
            ],
            
               [
               
               'class' => 'yii\grid\ActionColumn',
               'options'=>['style'=>['width'=>'12%']],
               'contentOptions' => ['class' => 'text-center'],
               'buttonOptions'=>['class'=>'btn btn-default'],
               'template'=>'<div class="btn-group btn-group-sm text-center" role="group">{view} {update} {delete} </div>'
              ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
</div>


