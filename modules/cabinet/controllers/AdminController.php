<?php

namespace app\modules\cabinet\controllers;

use yii\web\ForbiddenHttpexception;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if(\Yii::$app->user->can("admin")){
            return $this->render('index');
        }
        else{
            throw new ForbiddenHttpexception();
        }
        return $this->render('index');
    }

}
