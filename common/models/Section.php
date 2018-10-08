<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $id
 * @property string $section_code
 * @property int $status
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
          //  [['id'], 'required'],
            [[ 'status'], 'integer'],
            [['section_code'], 'string', 'max' => 255],
           // [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'section_code' => Yii::t('app', 'Section Code'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
