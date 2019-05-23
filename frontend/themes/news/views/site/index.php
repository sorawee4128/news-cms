<?php

Yii::$app->layout='homepage';

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@news/dist');
?>
<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Studio!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
            <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>
