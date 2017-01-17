<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods_category}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $parent_id
 * @property string $created_at
 */
class GoodsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'created_at'], 'integer'],
            [['title'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',
            'created_at' => 'Created At',
        ];
    }
}
