<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Comment]].
 *
 * @see Comment
 */
class CommentQuery extends \yii\db\ActiveQuery
{
    /**
     * With user_id condition
     * @param $user_id
     * @return $this
     */
    public function withUserId($user_id)
    {
        $this->andWhere(
            'blg_comment.user_id = :user_id',
            [
                ':user_id' => $user_id
            ]
        );
        return $this;
    }

    /**
     * With blog_id condition
     * @param $blog_id
     * @return $this
     */
    public function withBlogId($blog_id)
    {
        $this->andWhere(
            'blg_comment.blog_id = :blog_id',
            [
                ':blog_id' => $blog_id
            ]
        );
        return $this;
    }

    /**
     * @inheritdoc
     * @return Comment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Comment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}