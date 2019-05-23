   <!-- Navigation -->
   <?php
   use yii\helpers\Html;
   use yii\bootstrap\Nav;
   use yii\bootstrap\NavBar;
   use yii\helpers\ArrayHelper;
   use yii\helpers\Url;
    $class = !isset($class)?'':$class;
    if('url' == 'homepage'){
        $menus = [
       
      
            
          
          
            
        
        ];
    }else{
          $menus = [
     
          
         
           
         
        ];
    }
   ?>

<?php
    $options = ['navbar','navbar-default','navbar-fixed-top'];
    NavBar::begin([
        'brandLabel' => 'Cms-News',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions'=>[
            'class'=>'navbar-header page-scroll'
        ],
        'options' => [
            'class' => 'navbar navbar-default navbar-fixed-top '.$class,
        ],
    ]);
    if(Yii::$app->user->isGuest){
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' =>ArrayHelper::merge($menus,
           [
                                 
           
               
            Yii::$app->user->isGuest ?
            
            
                ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']] :
                ['label' => 'ออกจากระบบ ',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
                   
             ]),
    ]);
           }
           else{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' =>ArrayHelper::merge($menus,
                   [
                    ['label' => 'Create News', 'url' => ['/content/create'],'visible'=> Yii::$app->user->isGuest == false ? true : false ],
                    ['label' => 'Management', 'url' => ['/content/index'],'visible'=> Yii::$app->user->isGuest == false ? true : false ],
                       
                    Yii::$app->user->isGuest ?
                    
                    
                        ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']] :
                        ['label' => '('.Yii::$app->user->identity->username.')'.''.'ออกจากระบบ ',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                           
                     ]),
            ]);

           }
    NavBar::end();
?>
