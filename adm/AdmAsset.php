<?php
/**
 * @copyright Copyright &copy; Pavels Radajevs <pavlinter@gmail.com>, 2014
 * @package yii2-adm
 */

namespace pavlinter\adm;

/**
 * Class AdmAsset
 */
class AdmAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@admRoot/assets';

    public $css = [
        'css/animate.css',
        'css/font-awesome.min.css',
        'css/font.css',
        'css/app.css',
    ];
    public $js = [
        'js/app.js',
        'js/common.js',
    ];
    public $depends = [
        'pavlinter\adm\AdmIeAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}