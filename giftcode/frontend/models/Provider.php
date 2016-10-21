<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_provider".
 *
 * @property integer $id
 * @property string $provider_name
 * @property integer $status
 */
class Provider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['provider_name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provider_name' => 'Provider Name',
            'status' => 'Status',
        ];
    }
}
