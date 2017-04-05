<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class Manager extends ActiveRecord
{
    public function attributeLabels()
    {
        return [];
    }
    
    public function rules()
    {
        return [];
    }
    
    public function getClient() 
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }
    
    public function getTransactions() 
    {
        return $this->hasMany(Transaction::className(), ['manager_id' => 'id']);
    }
}

class ManagerQuery extends ActiveQuery
{
    
}