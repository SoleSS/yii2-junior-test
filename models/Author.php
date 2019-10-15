<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $name Имя или псевдоним автора
 * @property int $birth_year Год рождения
 * @property int $rating Рейтинг
 *
 * @property Book[] $books
 */
class Author extends base\Author
{
    public $booksLink;

    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }

    public function attributeLabels() {
        $labels = parent::attributeLabels();
        $labels['booksLink'] = 'Список книг';

        return $labels;
    }
}
