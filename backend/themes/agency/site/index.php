   <?php

    Yii::$app->layout='homepage';

   $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@dixonsatit/agencyTheme/dist');
   ?>
   <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>

            </div>
        </div>
    </header>

    <?php  //echo $this->render('_service.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?php //echo $this->render('_portfolio.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?php //echo $this->render('_about.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?php //echo $this->render('_team.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?php //echo $this->render('_client.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?php //echo $this->render('_contact.php',['directoryAsset'=>$directoryAsset ]) ?>
    