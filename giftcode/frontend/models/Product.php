<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $id
 * @property string $product_name
 * @property integer $provider_id
 * @property integer $status
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provider_id', 'status'], 'integer'],
            [['product_name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'provider_id' => 'Provider ID',
            'status' => 'Status',
        ];
    }
}
