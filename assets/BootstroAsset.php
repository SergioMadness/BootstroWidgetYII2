<?php

namespace professionalweb\BootstroWidget\assets;

use yii\web\AssetBundle;

class BootstroAsset extends AssetBundle
{
    public $sourcePath = '@vendor/professionalweb/bootstro-widget-yii2/assets/bootstro.js-master';
    public $css        = [
        'bootstro.min.css'
    ];
    public $js         = [
        'bootstro.min.js'
    ];
    public $depends    = [
        'yii\web\YiiAsset'
    ];

}