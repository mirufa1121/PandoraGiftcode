<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Homeitem;

class GiftcodeController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$id=Yii::$app->request->get('id');
    	$model=Homeitem::getById($id);
    	$count=Homeitem::getCount();
        return $this->render('index',['model'=>$model,'count'=>$count]);
    }

}
