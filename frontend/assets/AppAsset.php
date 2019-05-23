<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@news/dist';
    public $css = [
        'css/animate.css',
        'css/bootstrap.css',
        'css/bootstrap-grid.css',
        'css/bootstrap-reboot.css',
        'css/owl.carousel.min.css',
        'css/style.css',
    ];

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/bootstrap.min.js',
        //'js/cbpAnimatedHeader.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery-3.2.1.min.js',
        'js/jquery-migrate-3.0.0.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/popper.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'news\assets\FontAwesomeAsset'
    ];
}