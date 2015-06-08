<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $family
 * @property string $mobile
 * @property string $home
 * @property string $work
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'family', 'mobile', 'home', 'work'], 'required'],
            [['name', 'family'], 'string', 'max' => 20],
            [['mobile', 'home', 'work'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'family' => 'Family',
            'mobile' => 'Mobile',
            'home' => 'Home',
            'work' => 'Work',
        ];
    }
}
