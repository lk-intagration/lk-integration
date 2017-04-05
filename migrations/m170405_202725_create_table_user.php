<?php

use yii\db\Migration;

class m170405_202725_create_table_user extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()->unsigned(),
            'login' => $this->string(50),
            'active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
