<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventaris".
 *
 * @property string $id_inv
 * @property string $nama_brg
 * @property float $harga
 * @property string $keterangan
 * @property string $timestamp
 */
class Inventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_inv', 'nama_brg', 'harga', 'keterangan'], 'required'],
            [['harga'], 'number'],
            [['keterangan'], 'string'],
            [['id_inv', 'timestamp'], 'string', 'max' => 50],
            [['nama_brg'], 'string', 'max' => 255],
            [['id_inv'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_inv' => 'Id Inv',
            'nama_brg' => 'Nama Brg',
            'harga' => 'Harga',
            'keterangan' => 'Keterangan',
            'timestamp' => 'Timestamp',
        ];
    }
}
