<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Content */

$this->title = $model->title;

\yii\web\YiiAsset::register($this);
?>
<div class="panel panel-default">
<div class="panel-body">
<div class="content-view">
    <p>
  
    </p>

 
    <center><p><h1><?= Html::encode($this->title) ?></h1></p></center>
    <br>
 <div><?= Html::a($model->fulltext) ?></div>
 <br>
 <div align = "right" ><a href="index.php" ><button class="btn btn-primary btn-sm">back</button></a></div>

</div>
</div>
</div>
