<?php

use yii\db\Migration;

class m170405_213251_create_table_wrapper extends Migration
{
    public function up()
    {
        $this->createTable('wrapper', [
            'id' => $this->primaryKey()->unsigned(),
            'client_id' => $this->integer(10)->unsigned()->notNull(),
            'active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
        $this->addForeignKey('wrapper_client_id_fk', 'wrapper', 'client_id', 'client', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('wrapper_client_id_fk', 'wrapper');
        $this->dropTable('wrapper');
    }
}
