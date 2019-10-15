<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property int $author_id id Автора
 * @property int $publish_year Год издания
 * @property string $title Названия
 * @property int $rating Рейтинг
 *
 * @property Author $author
 */
class Book extends base\Book
{
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }
}
