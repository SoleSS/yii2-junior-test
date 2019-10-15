<?php

namespace app\models\base;

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
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['birth_year', 'rating'], 'default', 'value' => null],
            [['birth_year', 'rating'], 'integer'],
            [['name'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя или псевдоним автора',
            'birth_year' => 'Год рождения',
            'rating' => 'Рейтинг',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }
}
