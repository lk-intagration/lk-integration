<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class Support extends ActiveRecord
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
}

class SupportQuery extends ActiveQuery
{
    
}