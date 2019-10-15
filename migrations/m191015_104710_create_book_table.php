<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m191015_104710_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->comment('id Автора'),
            'publish_year' => $this->integer(4)->comment('Год издания'),
            'title' => $this->string(1024)->notNull()->comment('Названия'),
            'rating' => $this->integer()->defaultValue(0)->comment('Рейтинг'),
        ]);

        $this->createIndex('idx-book-author_id', 'book', 'author_id');
        $this->addForeignKey('fk-book-author_id', 'book', 'author_id', 'author', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-book-author_id', 'book');

        $this->dropTable('{{%book}}');
    }
}
