<?php

namespace frontend\widgets;

use yii\base\Widget;

class topheadWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		return $this->render('topheadWidget');
	}
}
?>