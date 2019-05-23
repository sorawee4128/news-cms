<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;
use yii\helpers\Url;
use kartik\tabs\TabsX;


/* @var $this yii\web\View */
/* @var $model backend\models\Content */
/* @var $form yii\widgets\ActiveForm */



?>
<div class="content-form">
<?php $form = ActiveForm::begin(); ?>
<?=  TabsX::widget([
    'items'=>[
        [
            'label'=>'<i class="fas fa-home"></i> Content',
            'content'=> $this->render('_Content', ['form' => $form, "model" => $model]),
            'active'=>true
        ],
        [
            'label'=>'<i class="fas fa-user"></i> Publish',
            'content'=> $this->render('_Publishing',['form' => $form, "model" => $model]),
         ],
       
        ],
    'position'=>TabsX::POS_ABOVE,
    'bordered'=>true,
    'encodeLabels'=>false
]);?>
<br>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>