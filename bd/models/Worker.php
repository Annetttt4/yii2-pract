<?php
namespace app\models;
use yii\db\ActiveRecord; 
 
class Worker extends ActiveRecord
{
    public static function tableName(){
        return 'worker';
    }
   public function getSkils(){
       return $this->hasMany(Skils::className(),['skils'=>'id']);
   }
}