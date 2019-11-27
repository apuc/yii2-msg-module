<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dialog}}`.
 */
class m191127_121241_create_dialog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dialog}}', [
            'id' => $this->primaryKey(),
            'owner' => $this->integer(),
            'status' => $this->tinyInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dialog}}');
    }
}
