<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dialog_message}}`.
 */
class m191127_121908_create_dialog_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dialog_message}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'dialog_id' => $this->integer()->notNull(),
            'owner' => $this->integer(),
            'status' => $this->tinyInteger(),
            'created_at' => $this->integer()
        ]);
        $this->addForeignKey('dialog_message_dialog', 'dialog_message', 'dialog_id', 'dialog', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('dialog_message_dialog', 'dialog_message');
        $this->dropTable('{{%dialog_message}}');
    }
}
