<?php

use yii\db\Migration;

class m170405_212742_create_table_manager extends Migration
{
    public function up()
    {
        $this->createTable('manager', [
            'id' => $this->primaryKey()->unsigned(),
            'client_id' => $this->integer(10)->unsigned()->notNull(),
            'active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
        $this->addForeignKey('manager_client_id_fk', 'manager', 'client_id', 'client', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('manager_client_id_fk', 'manager');
        $this->dropTable('manager');
    }
}
