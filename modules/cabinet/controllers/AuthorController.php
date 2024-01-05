<?php

namespace app\modules\cabinet\controllers;
use yii\web\ForbiddenHttpexception;

class AuthorController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if(\Yii::$app->user->can("author")){
            return $this->render('index');
        }
        else{
            throw new ForbiddenHttpexception();
        }
        return $this->render('index');
    }

}
