<?php

namespace frontend\modules\admin;

use Yii;

/**
 * This is the model class for table "sports".
 *
 * @property string $userName
 * @property string $AletName
 * @property integer $minute
 * @property integer $weight
 */
class Sports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userName'], 'required'],
            [['minute', 'weight'], 'integer'],
            [['userName', 'AletName'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userName' => 'User Name',
            'AletName' => 'Alet Name',
            'minute' => 'Minute',
            'weight' => 'Weight',
        ];
    }
}
