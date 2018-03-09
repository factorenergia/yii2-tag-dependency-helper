<?php

namespace factorenergia\TagDependencyHelper\tests\models;

use factorenergia\TagDependencyHelper\CacheableActiveRecord;
use factorenergia\TagDependencyHelper\TagDependencyTrait;

/**
 * Class Post
 * @property integer $author_id
 * @property string $text
 */
class PostComposite extends \yii\db\ActiveRecord
{
    use TagDependencyTrait;

    public function behaviors()
    {
        return [
            'CacheableActiveRecord' => [
                'class' => CacheableActiveRecord::className(),
            ],
        ];
    }

    protected function cacheCompositeTagFields() {
        return ['author_id'];
    }

    public static function tableName()
    {
        return '{{%post}}';
    }

}