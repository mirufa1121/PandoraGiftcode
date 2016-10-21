<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "homeBanner".
 *
 * @property integer $id
 * @property string $baner_desc
 * @property string $appname
 * @property string $link
 * @property integer $tmpl
 * @property string $img
 * @property integer $type
 * @property integer $pos
 */
class HomeBanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homeBanner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tmpl', 'type', 'pos'], 'integer'],
            [['baner_desc', 'link', 'img'], 'string', 'max' => 512],
            [['appname'], 'string', 'max' => 128],
        ];
    }
	
	public static function getListBanner()
	{
		return static::find()->all();
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'baner_desc' => 'Baner Desc',
            'appname' => 'Appname',
            'link' => 'Link',
            'tmpl' => 'Tmpl',
            'img' => 'Img',
            'type' => 'Type',
            'pos' => 'Pos',
        ];
    }
}
