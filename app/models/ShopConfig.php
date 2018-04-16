<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%shop_config}}".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $code
 * @property string $type
 * @property string $store_range
 * @property string $store_dir
 * @property string $value
 * @property int $sort_order
 */
class ShopConfig extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shop_config}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['value'], 'required'],
            [['value'], 'string'],
            [['code'], 'string', 'max' => 30],
            [['type'], 'string', 'max' => 10],
            [['store_range', 'store_dir'], 'string', 'max' => 255],
            [['sort_order'], 'string', 'max' => 3],
            [['code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'code' => 'Code',
            'type' => 'Type',
            'store_range' => 'Store Range',
            'store_dir' => 'Store Dir',
            'value' => 'Value',
            'sort_order' => 'Sort Order',
        ];
    }
}
