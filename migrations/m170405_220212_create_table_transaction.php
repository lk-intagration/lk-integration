<?php

use yii\db\Migration;

class m170405_220212_create_table_transaction extends Migration
{
    public function up()
    {
        $this->createTable('transaction', [
            'id' => $this->primaryKey()->unsigned(),
            'user_client_id' => $this->integer(10)->unsigned()->notNull(),
            'manager_id' => $this->integer(10)->unsigned()->notNull(),
        ]);
        $this->addForeignKey('transaction_user_client_id_fk', 'transaction', 'user_client_id', 'user_client', 'id');
        $this->addForeignKey('transaction_manager_id_fk', 'transaction', 'manager_id', 'manager', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('transaction_user_client_id_fk', 'transaction');
        $this->dropForeignKey('transaction_manager_id_fk', 'transaction');
        $this->dropTable('transaction');
    }
}
