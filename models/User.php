<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class User extends ActiveRecord
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
        return $this->hasMany(UserClient::className(), ['user_id' => 'id']);
    }
    
    public function getClients() 
    {
        return $this->hasMany(Client::className(), ['id' => 'client_id'])->via('userClients');
    }
}

class UserQuery extends ActiveQuery
{
    
}