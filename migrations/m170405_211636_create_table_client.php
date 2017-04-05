<?php

use yii\db\Migration;

class m170405_211636_create_table_client extends Migration
{
    public function up()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(),
            'active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('client');
    }
}
