<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class Client extends ActiveRecord
{
    public function attributeLabels()
    {
        return [];
    }
    
    public function rules()
    {
        return [];
    }
    
    public function getUserClients() 
    {
        return $this->hasMany(UserClient::className(), ['client_id' => 'id']);
    }
    
    public function getUsers() 
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->via('userClients');
    }
}

class ClientQuery extends ActiveQuery
{
    
}