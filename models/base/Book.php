<?php

namespace app\models\base;

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
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'publish_year', 'rating'], 'default', 'value' => null],
            [['author_id', 'publish_year', 'rating'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 1024],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'id Автора',
            'publish_year' => 'Год издания',
            'title' => 'Названия',
            'rating' => 'Рейтинг',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }
}
