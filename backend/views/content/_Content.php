<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;
use yii\helpers\Url;
use kartik\tabs\TabsX;
use mihaildev\ckeditor\CKEditor;


?>

    
			


  

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

   
    <?=  $form->field($model, 'introtext')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
])->label('Intro Text'); ?>

   <?=  $form->field($model, 'fulltext')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
])->label('Full Text'); ?>