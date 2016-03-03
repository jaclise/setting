<?php

namespace jaclise\setting\models;

use Yii;

/**
 * This is the model class for table "jaclise_dict".
 *
 * @property integer $id
 * @property string $key
 * @property string $type
 * @property string $value
 * @property string $note
 * @property integer $order
 */
class Dict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'system_dict';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'type'], 'required'],
            [['value'], 'string'],
            [['order'], 'integer'],
            [['key', 'type'], 'string', 'max' => 32],
            [['note'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '主键',
            'key' => '键',
            'type' => '类别',
            'value' => '值',
            'note' => '备注',
            'order' => '排序',
        ];
    }
}
