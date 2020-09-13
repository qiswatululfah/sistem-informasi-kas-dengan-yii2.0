

<?php
use app\models\KasMahasiswa;

?>
<div class="msale-price--model-index">
<p align="center" class="kv-heading-1"> 
 DATA KAS MAHASISWA </p>

<div class="col-sm-12">
<table style="font-family: sans-serif;
                color: #444;
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #f2f5f7;
                ">
    <tr style="background: #00a65a;">
        <td style="color: #fff;" class="th" >
            ID KAS
        </td>
        <td  style="color: #fff;">
            NIM
        </td>
        <td  style="color: #fff;" >
            SETOR
        </td>
        <td  style="color: #fff;">
            TANGGAL SETOR
        </td>
    </tr>
<?php $data = KasMahasiswa::find()->all();
    foreach ($data as $value){
        echo "<tr>";
        echo "<td class='th1'> " .$value->id_kas. "</td>";
        echo "<td>" .$value->nim. "</td>";
        echo "<td>" .$value->setor. "</td>";
        echo "<td>" .$value->tglsetor. "</td>";
        echo "</tr>"; 
    }
    ?>
</table>
</di>