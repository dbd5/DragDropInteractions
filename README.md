DragDropInteractions Extension for Yii 2
=======================

Bottom Area:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionBottomArea',
    ];
}
```

Sidebar:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionSidebar',
    ];
}
```

Page Scale:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionPageScale',
    ];
}
```

Modal:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionModal',
    ];
}
```

Icons:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionIcons',
    ];
}
```

Bottom Slide:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionBottomSlide',
    ];
}
```

Reveal:
Add to you AppAsset
```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\DragDropInteractions\assets\DragDropInteractionReveal',
    ];
}
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiisoft/yii2-drag-drop-interactions "*"
```

or add

```json
"yiisoft/yii2-drag-drop-interactions": "*"
```

to the require section of your composer.json.