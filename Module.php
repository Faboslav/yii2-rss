<?php

namespace faboslav\rss;

use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\rss\controllers';

    public function init()
    {
        parent::init();

        Yii::$app->view->registerLinkTag([
            'rel' => 'alternate',
            'type' => 'application/rss+xml',
            'title' => $title,
            'href' => url('/rss/default/index', true)
        ]);
    }
}