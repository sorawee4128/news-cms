<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use backend\models\Category;
use kartik\datetime\DateTimePicker;

$model->publish_up >= $model->publish_down;
$category=Category::find()->all();
$listData=ArrayHelper::map($category,'id','name');
$state= ['1' => 'Published', '2' => 'Unpublished'];
?>


<?= $form->field($model, 'Category')->dropDownList(
        $listData,
        ['prompt'=>'Select Category']
        );
?>
<?= $form->field($model, 'state')->dropDownList($state,['prompt'=>'Select State']);?>

<?= $form->field($model, 'created')->hiddenInput(['value'=>date("Y-m-d H:i:s")])->label(false) ?>

<?= $form->field($model, 'created_by')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>

<?= $form->field($model, 'modified')->hiddenInput(['value'=>date("Y-m-d H:i:s")])->label(false) ?>

<?= $form->field($model, 'modified_by')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>


<?= $form->field($model, 'publish_up')->widget(DateTimePicker::classname(), [
    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
    'options'=>['id'=>'pd'],
    'pluginOptions' => [
     
        'autoclose'=>true,
        'format' => 'yyyy-mm-d HH:ii:ss',
        'startDate'=> date('Y-m-d'),
      
    ],
  

]);?>     


<?= $form->field($model, 'publish_down')->widget(DateTimePicker::classname(), [

    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-d HH:ii:ss',
        'startDate'=> date('Y-m-d'),
    ],

]);?>    




<?=  $form->field($model, 'images')->widget(FileInput::classname(), [
  'options' => ['accept' => 'image/*' ] ,
               
  'pluginOptions' => [
      
      'overwriteInitial'=>true,
      'showPreview' => true,
      'showCaption' => false,
      'showRemove' => true,
      'showUpload' => false
  ]
])->label('Image Topic') ?> 


