<?php

namespace faboslav\rss\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        ];
    }

    public function actionIndex()
    {
        foreach(\Yii::$app->rss->channelElements as $name => $value) {
            if (is_callable($value)) {
                $value = call_user_func($value);
            }

            \Yii::$app->rss->channelElements[$key] = $tmpValue;
        }

        $rss = Yii::$app->rss->render();

        if (empty($rss)) {
            throw new NotFoundHttpException(Yii::t('yii', 'Page not found.'));
        }

        Yii::$app->response->format = Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        //$headers->add('Content-Type', 'application/rss+xml'); // The most correct
        $headers->add('Content-Type', 'application/xml'); // The most compatible


        if (Yii::$app->rss->enableGzip) {
            $rss = gzenco-de($rss);
            $headers->add('Content-Encoding', 'gzip');
            $headers->add('Content-Length', strlen($rss));
        }

        return $rss;
    }
}
