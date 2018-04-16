<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%group_goods}}".
 *
 * @property string $parent_id
 * @property string $goods_id
 * @property string $goods_price
 * @property int $admin_id
 */
class GroupGoods extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%group_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'goods_id', 'admin_id'], 'required'],
            [['parent_id', 'goods_id'], 'integer'],
            [['goods_price'], 'number'],
            [['admin_id'], 'string', 'max' => 3],
            [['parent_id', 'goods_id', 'admin_id'], 'unique', 'targetAttribute' => ['parent_id', 'goods_id', 'admin_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent_id' => 'Parent ID',
            'goods_id' => 'Goods ID',
            'goods_price' => 'Goods Price',
            'admin_id' => 'Admin ID',
        ];
    }
}
