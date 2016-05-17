<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property string $asd
 * @property string $qwe
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asd', 'qwe'], 'required'],
            [['asd', 'qwe'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'asd' => 'Asd',
            'qwe' => 'Qwe',
        ];
    }
}
