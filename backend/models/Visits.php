<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "visits".
 *
 * @property int $vid
 * @property int $cid
 * @property int $did
 * @property string $visit_date
 * @property string $therapy
 * @property bool $online
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
 * @property resource $attach
 *
 * @property Custommers $c
 * @property Doctors $d
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
            [['did','visit_date', 'therapy', 'presenceـinـoffice', 'visit_start', 'visit_end', 'cost', 'Extra', 'discount', 'sum', 'pay_bt_card', 'pay_cash', 'pay_online', 'next_visit', 'comment', 'prescription', 'attach'], 'required'],
            [['cost', 'Extra', 'discount', 'sum', 'pay_bt_card', 'pay_cash', 'pay_online'], 'integer'],
            [['cid', 'did', 'visit_date', 'presenceـinـoffice', 'visit_start', 'visit_end', 'next_visit'], 'safe'],
            [['therapy', 'comment', 'prescription', 'attach'], 'string'],
            [['online'], 'boolean'],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => Custommers::className(), 'targetAttribute' => ['cid' => 'cid']],
            [['did'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::className(), 'targetAttribute' => ['did' => 'did']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vid' => 'شماره',
            'cid' => 'Cid',
            'did' => 'Did',
            'visit_date' => 'تاریخ ویزیت',
            'therapy' => 'درمان',
            'online' => 'آنلاین؟',
            'presenceـinـoffice' => 'حظور در مطب',
            'visit_start' => 'شروع ویزیت',
            'visit_end' => 'پایان ویزیت',
            'cost' => 'هزینه',
            'Extra' => 'Extra',
            'discount' => 'تخفیف',
            'sum' => 'جمع',
            'pay_bt_card' => 'پرداخت با کارت',
            'pay_cash' => 'پرداخت نقدی',
            'pay_online' => 'پرداخت آنلاین',
            'next_visit' => 'تاریخ ویزیت بعدی',
            'comment' => 'شرح حال',
            'prescription' => 'نسخه',
            'attach' => 'Attach',
            'duration' => 'مدت ویزیت'
        ];
    }

    /**
     * Gets query for [[C]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustommer()
    {
        return $this->hasOne(Custommers::className(), ['cid' => 'cid']);
    }

    /**
     * Gets query for [[D]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctors::className(), ['did' => 'did']);
    }

    public function getDuration() {
        return strtotime($this->visit_end)-strtotime($this->visit_start) ;
    }
}
