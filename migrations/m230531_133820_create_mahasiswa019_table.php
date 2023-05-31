<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa019}}`.
 */
class m230531_133820_create_mahasiswa019_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa019}}', [
            'id019' => $this->primaryKey(),
            'nim019' => $this->string(25)->Notnull()->unique(),
            'nama019' => $this->string(25)->Notnull(),
            'kelas019' => $this->string(25)->Notnull(),
            'status019' => $this->string(25)->Notnull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa019}}');
    }
}
