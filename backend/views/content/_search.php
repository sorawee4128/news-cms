<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractFormsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-forms-search">

 
<h2><i class="glyphicon glyphicon-list-alt"></i> news
</h2>
<br>
<div class="row">
    <div class="col-md-12">
          <!-- Nav tabs -->
         
          <!-- Tab panes -->
        
                    <div class="row">

                         <?php $form = ActiveForm::begin(['action'=>['index'],'method'=>'get']); ?>

                        <div class="form-group">
                            <div class="col-md-4">
                         
                            <?= $form->field($model, 'title')->textInput(['placeholder' => "search title"])->label(false) ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <?= Html::submitButton('<i class="glyphicon glyphicon-search"></i> '.Yii::t('app','search'), ['class' => 'btn btn-info input-sm']) ?>
                            </div>
                        </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
            </div>
