<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "visits".
 *
 * @property int $vid
 * @property int $cid
 * @property string $visit_date
 * @property string $therapy
 * @property bool $online
 * @property int $doctor
 * @property string $presenceـinـoffice
 * @property string $visit_start
 * @property string $visit_end
 * @property int $cost
 * @property int $Extra
 * @property int $discount
 * @property int $sum
 * @property int $pay_bt_card
 * @property int $pay_cash
 * @property int $pay_online
 * @property string $next_visit
 * @property string $comment
 * @property string $prescription
 *
 * @property Custommers $c
 * @property Doctors $doctor0
 */
class Visits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'visit_date', 'therapy', 'doctor', 'presenceـinـoffice', 'visit_start', 'visit_end', 'cost', 'Extra', 'discount', 'sum', 'pay_bt_card', 'pay_cash', 'pay_online', 'next_visit', 'comment', 'prescription'], 'required'],
            [['cid', 'doctor', 'cost', 'Extra', 'discount', 'sum', 'pay_bt_card', 'pay_cash', 'pay_online'], 'integer'],
            [['visit_date', 'presenceـinـoffice', 'visit_start', 'visit_end', 'next_visit'], 'safe'],
            [['therapy', 'prescription'], 'string'],
            [['online'], 'boolean'],
            [['comment'], 'string', 'max' => 255],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => Custommers::className(), 'targetAttribute' => ['cid' => 'cid']],
            [['doctor'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::className(), 'targetAttribute' => ['doctor' => 'did']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vid' => 'Vid',
            'cid' => 'Cid',
            'visit_date' => 'Visit Date',
            'therapy' => 'Therapy',
            'online' => 'Online',
            'doctor' => 'Doctor',
            'presenceـinـoffice' => 'Presenceـinـoffice',
            'visit_start' => 'Visit Start',
            'visit_end' => 'Visit End',
            'cost' => 'Cost',
            'Extra' => 'Extra',
            'discount' => 'Discount',
            'sum' => 'Sum',
            'pay_bt_card' => 'Pay Bt Card',
            'pay_cash' => 'Pay Cash',
            'pay_online' => 'Pay Online',
            'next_visit' => 'Next Visit',
            'comment' => 'Comment',
            'prescription' => 'Prescription',
        ];
    }

    /**
     * Gets query for [[C]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Custommers::className(), ['cid' => 'cid']);
    }

    /**
     * Gets query for [[Doctor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor0()
    {
        return $this->hasOne(Doctors::className(), ['did' => 'doctor']);
    }
}
