<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "doctors".
 *
 * @property int $did
 * @property string $first_name
 * @property string $last_name
 * @property string $visitdayes
 *
 * @property Visits[] $visits
 */
class Doctors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'visitdayes'], 'required'],
            [['visitdayes'], 'string'],
            [['first_name'], 'string', 'max' => 25],
            [['last_name'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'did' => 'Did',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'visitdayes' => 'Visitdayes',
        ];
    }

    /**
     * Gets query for [[Visits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visits::className(), ['doctor' => 'did']);
    }
}
