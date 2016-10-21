<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_giftcode".
 *
 * @property integer $id
 * @property integer $giftcode_type
 * @property string $giftcode_card
 * @property integer $product_id
 * @property string $create_time
 * @property string $getcard_time
 * @property integer $price
 * @property integer $user_id
 * @property integer $status
 */
class Giftcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_giftcode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['giftcode_type', 'giftcode_card', 'product_id', 'getcard_time', 'price', 'user_id', 'status'], 'required'],
            [['giftcode_type', 'product_id', 'price', 'user_id', 'status'], 'integer'],
            [['create_time', 'getcard_time'], 'safe'],
            [['giftcode_card'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'giftcode_type' => 'Giftcode Type',
            'giftcode_card' => 'Giftcode Card',
            'product_id' => 'Product ID',
            'create_time' => 'Create Time',
            'getcard_time' => 'Getcard Time',
            'price' => 'Price',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }
}
