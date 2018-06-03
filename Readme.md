# RSS Extension for Yii2

Module for project build with dactylcore/core package. 

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require faboslav/yii2-rss "1.0.0"
```

or add

```
"dactylcore/yii2-rss": "1.0.0"
```

to the `require` section of `composer.json` file.

## Configuration

You can configure the extension as shown below:

```
    'bootstrap' => ['rss'],
    'modules' => [
        'rss' => [
            'components' => [
                
            ],
            'class' => 'dactylcore\menu\admin\Module',
        ],
    ],
```
Also you can add items dynamically

```

```

## Pretty URL

Default url is ```www.website.test/rss/default/index```

Add URL rule for RSS to the config


```

```
