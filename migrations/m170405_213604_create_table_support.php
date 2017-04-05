<?php

use yii\db\Migration;

class m170405_213604_create_table_support extends Migration
{
    public function up()
    {
        $this->createTable('support', [
            'id' => $this->primaryKey()->unsigned(),
            'client_id' => $this->integer(10)->unsigned()->notNull(),
            'active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
        $this->addForeignKey('support_client_id_fk', 'support', 'client_id', 'client', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('support_client_id_fk', 'support');
        $this->dropTable('support');
    }
}
