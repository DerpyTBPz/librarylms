<?php

namespace app\modules\cabinet\controllers;

class CustomerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
