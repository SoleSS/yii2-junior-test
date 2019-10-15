<?php

use yii\db\Migration;

/**
 * Class m191015_110703_fill_tables_data
 */
class m191015_110703_fill_tables_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('author', ['name', 'birth_year', 'rating', ], [
            ['Лев Толстой', 1800, 100],
            ['Джордж Оруэлл', 1900, 99],
            ['Джеймс Джойс', 1922, 98],
            ['Владимир Набоков', 1900, 97],
            ['Уильям Фолкнер', 1900, 96],
            ['Ральф Эллисон', 1900, 95],
            ['Вирджиния Вульф', 1900, 94],
            ['Гомер', -700, 93],
            ['Джейн Остин', 1800, 92],
            ['Данте Алигьери', 1300, 91],
        ]);

        $this->batchInsert('book', ['author_id', 'publish_year', 'title', 'rating', ], [
            [1, 1869, 'Война и мир', 100],
            [2, 1949, '1984', 99],
            [3, 1922, 'Улисс', 98],
            [4, 1955, 'Лолита', 97],
            [5, 1929, 'Шум и ярость', 96],
            [6, 1952, 'Невидимка', 95],
            [7, 1927, 'К маяку', 94],
            [8, -700, 'Иллиада и Одиссея', 93],
            [9, 1813, 'Гордость и предубеждение', 92],
            [10, 1321, 'Божественная комедия', 91],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191015_110703_fill_tables_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191015_110703_fill_tables_data cannot be reverted.\n";

        return false;
    }
    */
}
