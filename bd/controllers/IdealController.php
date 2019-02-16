<?php

namespace app\controllers;
use yii\web\Controller;

class IdealController extends Controller
{
    public function actionIdeal($height){
    	$weight = $height-100;
        return $this->render('ideal', ['weight'=>$weight]);
    }
}