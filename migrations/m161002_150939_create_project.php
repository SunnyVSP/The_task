<?php

use yii\db\Migration;

class m161002_150939_create_project extends Migration
{
    public function up()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'status_id' => $this->integer(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('project_status', '{{%project}}', 'status_id', '{{%status}}', 'id', 'CASCADE', 'CASCADE');
    }


    public function down()
    {
        $this->dropTable('{{%project}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
