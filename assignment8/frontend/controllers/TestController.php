<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
<<<<<<< HEAD
=======
        $data = 'data test';
        return $this->render('index',[
            'xdata' => $data
        ]);
    }
    public function actionTest(){
>>>>>>> 874ff87c4b11f2c9edcae007da79fe462fe1b8d2
        echo 'test';
    }
}