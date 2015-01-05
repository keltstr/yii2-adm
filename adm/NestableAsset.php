<?php
/**
 * @copyright Copyright &copy; Pavels Radajevs <pavlinter@gmail.com>, 2014
 * @package yii2-adm
 */

namespace pavlinter\adm;

/**
 * Class NestableAsset
 */
class NestableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@admRoot/assets';
    public $css = [
        'js/nestable/nestable.css',
    ];
    public $js = [
        'js/nestable/jquery.nestable.js',
    ];
    public $depends = [
        'pavlinter\adm\AdmAsset'
    ];
}