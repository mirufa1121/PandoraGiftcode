<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;

class mainheadWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$type=Yii::$app->request->get('type');
		if(empty($type))$type="code-tan-thu";
		return $this->render('mainheadWidget',['type'=>$type]);
	}
}
?>