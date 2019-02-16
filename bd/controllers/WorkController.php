<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Worker;
use app\models\Skils;


class WorkController extends Controller {
    public function actionWork(){
    $model=Worker::find()->all();
    return $this->render('work',['work' => $model]);
    }

    public function actionSkils(){
        $skil=Skils::Find()-all();
        return $this->render('skils',['skils'=>$skil]);

    }


}