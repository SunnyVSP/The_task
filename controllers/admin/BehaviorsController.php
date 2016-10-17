<?php

namespace app\controllers\admin;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

class BehaviorsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];

    }
}