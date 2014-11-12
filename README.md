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
USAGE (Example)
---------------

Html markup

```
        <div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/MorphingSearch/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=21275"><span>Back to the Codrops Article</span></a></span>
			</div>
			<div class="content">
				<header class="codrops-header">
					<h1>Drag and Drop Interaction Ideas <span>Inspiration for drag and drop interactions for the modern UI</span></h1>
					<nav class="codrops-demos">
						<a href="index.html">Bottom Area</a>
						<a href="sidebar.html">Sidebar</a>
						<a href="page-scale.html">Page Scale</a>
						<a class="current-demo" href="modal.html">Modal</a>
						<a href="icons.html">Icons</a>
						<a href="bottoms-lide.html">Bottom Slide</a>
						<a href="reveal.html">Reveal</a>
					</nav>
				</header>
				<div id="grid" class="grid clearfix">
					<div class="grid__item"><i class="fa fa-fw fa-file-archive-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-image-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-word-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-excel-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-code-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-pdf-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-code-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-sound-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-video-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-archive-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-image-o"></i></div>
					<div class="grid__item"><i class="fa fa-fw fa-file-sound-o"></i></div>
				</div>
				<!-- Related demos -->
				<section class="related">
					<p>If you enjoyed this demo you might also like:</p>
					<a href="http://tympanus.net/Development/DraggableDualViewSlideshow/">
						<img src="img/related/DualViewSlideshow.png" alt="Dual-View Slideshow Image"/>
						<h3>Draggable Dual-View Slideshow</h3>
					</a>
					<a href="http://tympanus.net/Development/ButtonComponentMorph/">
						<img src="img/related/MorphingButtons.png" alt="Morphing Buttons Image" />
						<h3>Morphing Buttons Concept</h3>
					</a>
				</section>
			</div><!-- /content -->
		</div><!-- /container -->
		<div id="drop-area" class="drop-area">
			<div class="drop-area__item"></div>
			<div class="drop-area__item"></div>
		</div>
		<div class="drop-overlay"></div>
```


JavaScript Snippet

```
    $jsScript = <<<JS
            var body = document.body,
                dropArea = document.getElementById( 'drop-area' ),
                droppableArr = [], dropAreaTimeout;

        // initialize droppables
        [].slice.call( document.querySelectorAll( '#drop-area .drop-area__item' )).forEach( function( el ) {
            droppableArr.push( new Droppable( el, {
                onDrop : function( instance, draggableEl ) {
                    // show checkmark inside the droppabe element
                    classie.add( instance.el, 'drop-feedback' );
                    clearTimeout( instance.checkmarkTimeout );
                    instance.checkmarkTimeout = setTimeout( function() {
                        classie.remove( instance.el, 'drop-feedback' );
                    }, 800 );
                    // ...
                }
            } ) );
        } );

        // initialize draggable(s)
        [].slice.call(document.querySelectorAll( '#grid .grid__item' )).forEach( function( el ) {
            new Draggable( el, droppableArr, {
                draggabilly : {
                    containment: document.body,
                    handle: '.handle' // Optional
                },
                onStart : function() {
                    // add class 'drag-active' to body
                    classie.add( body, 'drag-active' );
                    // clear timeout: dropAreaTimeout (toggle drop area)
                    clearTimeout( dropAreaTimeout );
                    // show dropArea
                    classie.add( dropArea, 'show' );
                },
                onEnd : function( wasDropped ) {
                    var afterDropFn = function() {
                        // hide dropArea
                        classie.remove( dropArea, 'show' );
                        // remove class 'drag-active' from body
                        classie.remove( body, 'drag-active' );
                    };

                    if( !wasDropped ) {
                        afterDropFn();
                    }
                    else {
                        // after some time hide drop area and remove class 'drag-active' from body
                        clearTimeout( dropAreaTimeout );
                        dropAreaTimeout = setTimeout( afterDropFn, 400 );
                    }
                }
            } );
        } );
    JS;

$this->registerJs($jsScript);
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