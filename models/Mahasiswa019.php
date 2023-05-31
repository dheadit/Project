<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa019".
 *
 * @property int $id019
 * @property string $nim019
 * @property string $nama019
 * @property string $kelas019
 * @property string $status019
 */
class Mahasiswa019 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa019';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim019', 'nama019', 'kelas019', 'status019'], 'required'],
            [['nim019', 'nama019', 'kelas019', 'status019'], 'string', 'max' => 25],
            [['nim019'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id019' => 'ID',
            'nim019' => 'No. Induk Mahasiswa',
            'nama019' => 'Nama Mahasiswa',
            'kelas019' => 'Kelas',
            'status019' => 'Status',
        ];
    }
}
