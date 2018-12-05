<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "data".
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eurusd15m';
    }
    
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public static function getArrayType()
    {
        return $query = Type::find()->all();
    }
    
}