Yii2 widget displays errors
==============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist plance/yii2-widget-errorsummary "*"
```

or add

```
"plance/yii2-widget-errorsummary": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by:

```php
<?php echo ErrorSummary::widget(['Model' => $Model]) ?>
```