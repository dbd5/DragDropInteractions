<?php
namespace yii\DragDropInteractions\assets;
use yii\web\AssetBundle;
use Yii;
use yii\web\View;

/**
 * Class DragDropInteractionReveal
 *
 * @author Derick Fynn <dcfynn@vodamail.co.za>
 * @since 2.0
 * @package yii\DragDropInteractions\assets
 */
class DragDropInteractionReveal extends AssetBundle
{
    // The files are not web directory accessible, therefore we need
    // to specify the sourcePath property. Notice the @vendor alias used.
    public $sourcePath = '@vendor/yiisoft/yii2-drag-drop-interactions/src';
    public $css = [
        'css/reveal.css',
    ];

    public $depends = [
        'yii\DragDropInteractions\assets\DragDropInteraction',
    ];

    public $jsOptions = ['position' => View::POS_END];

    public static function register($view)
    {
        parent::register($view);

        Yii::setAlias('dragDropInteractionMedia', Yii::$app->getAssetManager()->bundles[static::className()]->baseUrl);
    }
} 