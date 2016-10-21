<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Homeitem;
use frontend\models\HomeInfo;

class canyoulikeWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$data=HomeInfo::getifcanLike(4);
		return $this->render('canyoulikeWidget',['data'=>$data]);
	}
}
?>