<?php

use yii\db\Migration;

class m170405_211801_create_table_user_client extends Migration
{
    public function up()
    {
        $this->createTable('user_client', [
            'id' => $this->primaryKey()->unsigned(),
            'user_id' => $this->integer(10)->unsigned()->notNull(),
            'client_id' => $this->integer(10)->unsigned()->notNull(),
        ]);
        $this->addForeignKey('user_client_user_id_fk', 'user_client', 'user_id', 'user', 'id');
        $this->addForeignKey('user_client_client_id_fk', 'user_client', 'client_id', 'client', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('user_client_user_id_fk', 'user_client');
        $this->dropForeignKey('user_client_client_id_fk', 'user_client');
        $this->dropTable('user_client');
    }
}
