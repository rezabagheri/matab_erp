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
        'css/adminlte.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'css/iCheck/flat/blue.css',
        'css/morris/morris.css',
        'css/jvectormap/jquery-jvectormap-1.2.2.css',
        'css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'css/rtl.css',

        
        
    ];
    public $js = [
        'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        'css/morris/morris.min.js',
        'css/sparkline/jquery.sparkline.min.js',
        'css/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'css/jvectormap/jquery-jvectormap-world-mill-en.js'        ,
        'css/knob/jquery.knob.js',
        'css/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
        'css/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'css/slimScroll/jquery.slimscroll.min.js',
        'css/fastclick/fastclick.js',
        'js/adminlte.js',
        'js/pages/dashboard.js',
        'js/demo.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',

    ];
}
