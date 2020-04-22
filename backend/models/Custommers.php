<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "custommers".
 *
 * @property int $cid
 * @property string $doc_no
 * @property string|null $firts_time_visit
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $father_name
 * @property string|null $gender
 * @property string|null $birth_date
 * @property int|null $birth_order
 * @property string|null $education_level
 * @property string|null $major
 * @property string|null $maritalـstatus
 * @property int|null $child_count
 * @property string|null $job
 * @property string|null $birth_place
 * @property string|null $primary_hand
 * @property string|null $mobile_number
 * @property string|null $home_phone
 * @property string|null $other_phones
 * @property string|null $referrer
 * @property string|null $address
 *
 * @property Visits[] $visits
 */
class Custommers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'custommers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_no'], 'required'],
            [['firts_time_visit', 'birth_date'], 'safe'],
            [['gender', 'education_level', 'maritalـstatus', 'primary_hand', 'address'], 'string'],
            [['birth_order', 'child_count'], 'integer'],
            [['doc_no'], 'string', 'max' => 8],
            [['first_name', 'father_name', 'mobile_number', 'home_phone'], 'string', 'max' => 25],
            [['last_name'], 'string', 'max' => 55],
            [['major', 'job', 'other_phones', 'referrer'], 'string', 'max' => 45],
            [['birth_place'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'doc_no' => 'ش.پ',
            'firts_time_visit' => 'اولین ویزیت',
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'father_name' => 'نام پدر',
            'gender' => 'جنسیت',
            'birth_date' => 'تاریخ تولد',
            'birth_order' => 'ترتیب تولد',
            'education_level' => 'تحصیلات',
            'major' => 'رشته‌ی تحصیلی',
            'maritalـstatus' => 'وضعیت تاهل',
            'child_count' => 'تعداد فرزندان',
            'job' => 'شغل',
            'birth_place' => 'محل تولد',
            'primary_hand' => 'دست غالب',
            'mobile_number' => 'موبایل',
            'home_phone' => 'تلفن منزل',
            'other_phones' => 'تلفن ضروری',
            'referrer' => 'معرف',
            'address' => 'Address',
        ];
    }

    
    
    
    /**
     * Gets query for [[Visits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visits::className(), ['cid' => 'cid']);
    }
}
