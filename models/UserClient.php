<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class UserClient extends ActiveRecord
{
    public function attributeLabels()
    {
        return [];
    }
    
    public function rules()
    {
        return [];
    }
    
    public function getUser() 
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    public function getClient() 
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }
    
    public function getTransactions() 
    {
        return $this->hasMany(Transaction::className(), ['user_client_id' => 'id']);
    }
}

class UserClientQuery extends ActiveQuery
{
    
}