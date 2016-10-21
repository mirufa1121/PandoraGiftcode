<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome-1.02.css',
        'css/main-1.19.css',
        'css/table_reponsive-1.07.css',
    ];
    public $js = [
		'js/jquery.jcarousel.min.js',
		'js/jcarousel.responsive.js',
		'js/megift-1.34.js',
		'js/custom-1.04.js',
		'js/dropdown.js',
		'js/modal.js',
		'js/tab.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
