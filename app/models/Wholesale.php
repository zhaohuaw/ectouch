<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%wholesale}}".
 *
 * @property string $act_id
 * @property string $goods_id
 * @property string $goods_name
 * @property string $rank_ids
 * @property string $prices
 * @property int $enabled
 */
class Wholesale extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wholesale}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'goods_name', 'rank_ids', 'prices', 'enabled'], 'required'],
            [['goods_id'], 'integer'],
            [['prices'], 'string'],
            [['goods_name', 'rank_ids'], 'string', 'max' => 255],
            [['enabled'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'act_id' => 'Act ID',
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'rank_ids' => 'Rank Ids',
            'prices' => 'Prices',
            'enabled' => 'Enabled',
        ];
    }
}
