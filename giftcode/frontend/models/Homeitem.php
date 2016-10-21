<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "homeitems".
 *
 * @property integer $id
 * @property integer $orderdata
 * @property string $icon_type
 * @property string $url
 * @property string $title
 */
class Homeitem extends \yii\db\ActiveRecord
{
	const CODE_VIP="code-vip";
	const CODE_NEWBIE="code-tan-thu";
	const CODE_ALL="code-all";
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
            [['orderdata'], 'integer'],
            [['url', 'title'], 'required'],
            [['icon_type'], 'string', 'max' => 20],
            [['url','image','thumbnail'], 'string', 'max' => 512],
            [['title'], 'string', 'max' => 128],
        ];
    }
	
	public static function getCodeByType($type)
	{
		if($type==Homeitem::CODE_ALL)
		{
			$data=Homeitem::find()->all();
			return $data;
		}
		else
		{
			$data=Homeitem::find()->where(['icon_type'=>$type])->all();
			return $data;
		}
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
