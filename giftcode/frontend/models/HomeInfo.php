<?php

namespace frontend\models;

use Yii;

use frontend\models\Homeitem;
/**
 * This is the model class for table "homeitems".
 *
 * @property integer $id
 * @property integer $orderdata
 * @property string $icon_type
 * @property string $url
 * @property string $title
 */
class HomeInfo extends \yii\db\ActiveRecord
{
	const TYPE_VIP="vip";
	const TYPE_NEWBIE="newbie";
	const TYPE_NEW="all";
	
	public $error;
	public $err;
	public $msg;
	public $data;
	public $nextSlice;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homeitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['error','err','nextSlice'], 'integer'],
            [['msg'], 'string', 'max' => 256],
			[['data'],'required']
        ];
    }
	public static function getifcanLike($limit)
	{
		return Homeitem::find()->limit($limit)->all();
	}
	public static function getHomeReload($type)
	{
		$model=new HomeInfo();
		switch($type)
		{
			case HomeInfo::TYPE_VIP:
				$model->data=(Homeitem::getCodeByType(Homeitem::CODE_VIP));
			break;
			case HomeInfo::TYPE_NEWBIE:
				$model->data=(Homeitem::getCodeByType(Homeitem::CODE_NEWBIE));
			break;
			default:
				$model->data=(Homeitem::getCodeByType(Homeitem::CODE_ALL));
		}
		$model->error=0;
		$model->err=0;
		$model->msg="";
		$model->nextSlice=0;
		return $model;
	}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderdata' => 'Orderdata',
            'icon_type' => 'Icon Type',
            'url' => 'Url',
            'title' => 'Title',
        ];
    }
}