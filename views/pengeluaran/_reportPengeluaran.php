

<?php
use app\models\Pengeluaran;

?>
<div class="msale-price--model-index">
<p align="center" class="kv-heading-1"> 
 PENGELUARAN KAS MAHASISWA </p>

<div class="col-sm-12">
<table style="font-family: sans-serif;
                color: #444;
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #f2f5f7;
                ">
    <tr style="background: #00a65a;">
        <td style="color: #fff;" class="th" >
            ID KELUAR
        </td>
        <td  style="color: #fff;">
            NIM
        </td>
        <td  style="color: #fff;" >
            JUMLAH
        </td>
        <td  style="color: #fff;">
            KETERANGAN
        </td>
    </tr>
<?php $data = Pengeluaran::find()->all();
    foreach ($data as $value){
        echo "<tr>";
        echo "<td class='th1'> " .$value->id_keluar. "</td>";
        echo "<td>" .$value->nim. "</td>";
        echo "<td>" .$value->jumlah. "</td>";
        echo "<td>" .$value->keterangan. "</td>";
        echo "</tr>"; 
    }
    ?>
</table>
</di>