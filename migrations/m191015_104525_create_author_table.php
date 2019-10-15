<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author}}`.
 */
class m191015_104525_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(256)->notNull()->comment('Имя или псевдоним автора'),
            'birth_year' => $this->integer(4)->comment('Год рождения'),
            'rating' => $this->integer()->defaultValue(0)->comment('Рейтинг'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%author}}');
    }
}
