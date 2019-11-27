<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dialog_user}}`.
 */
class m191127_121537_create_dialog_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dialog_user}}', [
            'user_id' => $this->integer()->notNull(),
            'dialog_id' => $this->integer()->notNull(),
            'create_time' => $this->integer()
        ]);
        $this->addPrimaryKey('dialog_user_PK', 'dialog_user', ['user_id', 'dialog_id']);
        $this->addForeignKey('dialog_user_user', 'dialog_user', 'user_id', 'user', 'id');
        $this->addForeignKey('dialog_user_dialog', 'dialog_user', 'dialog_id_id', 'dialog', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('dialog_user_user', 'dialog_user');
        $this->dropForeignKey('dialog_user_dialog', 'dialog_user');
        $this->dropTable('{{%dialog_user}}');
    }
}
