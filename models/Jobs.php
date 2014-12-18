<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobs".
 *
 * @property integer $job_id
 * @property integer $job_category_id
 * @property string $job_title
 * @property string $job_description
 * @property integer $job_status
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_category_id', 'job_title', 'job_description', 'job_status'], 'required'],
            [['job_category_id', 'job_status'], 'integer'],
            [['job_title'], 'string', 'max' => 100],
            [['job_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'job_category_id' => 'Job Category ID',
            'job_title' => 'Job Title',
            'job_description' => 'Job Description',
            'job_status' => 'Job Status',
        ];
    }
}
