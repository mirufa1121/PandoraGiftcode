<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\HomeBanner;

class bannerSlideWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$data=HomeBanner::getListBanner();
		return $this->render('bannerSlideWidget',['data'=>$data]);
	}
}
?>