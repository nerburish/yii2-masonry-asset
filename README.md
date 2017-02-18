Yii2 Masonry.js Asset
======================

Simple asset bundle for masonry.js jQuery plugin (http://masonry.desandro.com/)
Masonry is a JavaScript grid layout library.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nerburish/yii2-masonry-asset "*"
```

or add

```
"nerburish/yii2-masonry-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You can register the asset in your AppAsset 

```
class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'nerburish\masonry\MasonryAsset'
    ];
}
```

or use it directly in a view 

```
<?php
\nerburish\masonry\MasonryAsset::register($this);
?>
```

And then use as it is described in the documentation (https://github.com/desandro/masonry):




 
