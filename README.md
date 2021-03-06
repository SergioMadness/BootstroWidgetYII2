# BootstroWidgetYII2
[Yii2](http://www.yiiframework.com/) widget. Wrapper for [Bootstro.js](http://clu3.github.io/bootstro.js/)

## Composer

BootstroWidgetYII2 is available through [composer](https://getcomposer.org/)

    composer require professionalweb/bootstro-widget-yii2 "dev-master"
  
Alternatively you can add the following to the `require` section in your `composer.json` manually:

```json
"professionalweb/bootstro-widget-yii2": "dev-master"
```

Run `composer update` afterwards.

### In your PHP project
```php
use professionalweb\BootstroWidget\BootstroWidget;

<?=
BootstroWidget::widget([
    'startSelector' => '.bootstro',
    'pluginOptions' => [
        'nextButtonText' => 'Next',
        'finishButtonText' => 'Back',
        'finishButtonText' => 'Complete',
        'onComplete' => new JsExpression('function(){setTourIsCompleted();}'),
        'onExit' => new JsExpression('function(){setTourIsCompleted();}')
    ]
]);
?>
```

## Dependencies
- [Yii2](http://www.yiiframework.com/)
- [jQuery](http://jquery.com/)

## The MIT License

The MIT License (MIT)

Copyright (c) 2016 Sergey Zinchenko, [Professional web](http://web-development.pw/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.