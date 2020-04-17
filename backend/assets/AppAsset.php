<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/rtl.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'css/iCheck/flat/blue.css',
        'css/morris/morris.css',
        'css/jvectormap/jquery-jvectormap-1.2.2.css',
        'css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',

    ];
}
