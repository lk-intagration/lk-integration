<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class Transaction extends ActiveRecord
{
    public function attributeLabels()
    {
        return [];
    }
    
    public function rules()
    {
        return [];
    }
    
    public function getUserClient() 
    {
        return $this->hasOne(UserClient::className(), ['id' => 'user_client_id']);
    }
    
    public function getManager() 
    {
        return $this->hasOne(Manager::className(), ['id' => 'manager_id']);
    }
}

class TransactionQuery extends ActiveQuery
{
    
}