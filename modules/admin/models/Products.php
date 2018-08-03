<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $image
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
        ];
    }



    // Types

    /**
     * Selecting from the list of answers
     */
    const TYPE_CLOSED = 1;

    /**
     * Writing answer manually
     */
    const TYPE_OPENED = 2;



    /**
     * @return array
     */
    public static function getTypesList()
    {
        return [
            self::TYPE_CLOSED => 'Closed',
            self::TYPE_OPENED => 'Opened',
        ];
    }
}
