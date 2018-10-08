<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $section
 * @property int $status
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'status'], 'integer'],
            [['firstname', 'lastname', 'section'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'section' => Yii::t('app', 'Section'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
