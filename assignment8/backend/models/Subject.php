<?php
namespace backend\models;

use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

class Subject extends \common\models\Subject
{
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }
    public function rules(){
        return [
            ['name', 'required', 'message' => 'เสียใจด้วย คุณไม่ได้ไปต่อ!!'],
            ['name', 'email', 'message'=> 'กรุณากรอกอีเมล์เด้อ!!']
        ];
    }
}