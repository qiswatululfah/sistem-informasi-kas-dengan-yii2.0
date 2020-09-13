<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengeluaran".
 *
 * @property string $id_keluar
 * @property string $nim
 * @property float $jumlah
 * @property string $keterangan
 * @property string $timestamp
 */
class Pengeluaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keluar', 'nim', 'jumlah', 'keterangan'], 'required'],
            [['jumlah'], 'number'],
            [['keterangan'], 'string'],
            [['id_keluar', 'timestamp'], 'string', 'max' => 255],
            [['nim'], 'string', 'max' => 50],
            [['id_keluar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_keluar' => 'Id Keluar',
            'nim' => 'Nim',
            'jumlah' => 'Jumlah',
            'keterangan' => 'Keterangan',
            'timestamp' => 'Timestamp',
        ];
    }

    public static function getQuery($querysql){
        $connection = Yii::$app->getDB();
        $query = $connection->createCommand($querysql);
        return $query->queryAll();
    }

    public function getPengeluaran()
    {
        $a = "PENG";
        $b = date("m");
        $c = date("y");
        $d = $b.$c;

        $data = Pengeluaran::getQuery('select id_keluar from pengeluaran order by id_keluar desc');
        if (empty($data))
        {
            $kosong = $a .$d ."00001";
            return $kosong;
        }else{
            $kdKlr = $data[0]['id_keluar'];
            $kdKlr++;
            $noUrut = (int) substr($kdKlr,7, 13);

            $kodeBarang = $a. $d. sprintf("%05s", $noUrut);
            return $kodeBarang;        
        }
    }

}
