<?php

namespace frontend\controllers;

use Yii;
use frontend\models\HomeInfo;
use frontend\models\HomeBanner;

class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
       return $this->render('index');
    }
	public function actionGettab()
	{
		$type=Yii::$app->request->get('type');
		$data=array();
		if($type=="code-vip")// Vip
			$data=HomeInfo::getHomeReload(HomeInfo::TYPE_VIP);
		if($type=="code-tan-thu")// Tan thu
			$data=HomeInfo::getHomeReload(HomeInfo::TYPE_NEWBIE);
		if($type=="all")//tat ca
			$data=HomeInfo::getHomeReload(HomeInfo::TYPE_NEW);
		
		return $this->renderAjax('homeview',['data'=>$data["data"]]);
	}
}
