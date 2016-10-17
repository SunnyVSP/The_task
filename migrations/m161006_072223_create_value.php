<?php

use yii\db\Migration;

class m161006_072223_create_value extends Migration
{
    public function up()
    {
        $this->createTable('{{%value}}', [
            'project_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'role_id' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-value', '{{%value}}', ['project_id', 'user_id', 'role_id']);

        $this->addForeignKey('value-project', '{{%value}}', 'project_id', '{{%project}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('value-user', '{{%value}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('value-role', '{{%value}}', 'role_id', '{{%role}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%value}}');

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
