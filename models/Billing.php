<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\base\Model;
use app\models\Users;

/**
 * This is the model class for table "billing".
 *
 * @property int $id
 * @property string $id_username
 * @property int $Sum
 *
 * @property Users $username
 */
class Billing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing';
    }

    /*public function getUsers(){
        return $this->hasMany(Users::classname(), ['username' => 'id_username'])
            ->viaTable('billing', ['id_username' => 'username']);    
    }*/
     public function getUsers()
    {
        return $this->hasMany(Users::className(), ['username' => 'id_username']);
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_username', 'Sum'], 'required'],
            [['Sum'], 'integer'],
            [['id_username'], 'string', 'max' => 11],
            [['id_username'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id_username' => 'username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_username' => 'Username',
            'Sum' => 'Sum',
            
        ];
    }

    /**
     * Gets query for [[Username]].
     *
     * @return \yii\db\ActiveQuery
     */
   

    
}
