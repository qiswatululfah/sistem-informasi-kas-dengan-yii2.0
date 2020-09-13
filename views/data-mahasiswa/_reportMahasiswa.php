

<?php
use app\models\DataMahasiswa;

?>
<div class="msale-price--model-index">
<p align="center" class="kv-heading-1"> 
 DATA MAHASISWA </p>

<div class="col-sm-12">
<table style="font-family: sans-serif;
                color: #444;
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #f2f5f7;
                ">
    <tr style="background: #00a65a;">
        <td style="color: #fff;" class="th" width="10%">
            NIM
        </td>
        <td  style="color: #fff;" width="18%">
            Nama
        </td>
        <td  style="color: #fff;" width="10%">
            Alamat
        </td>
        <td  style="color: #fff;" width="14">
            Jurusan
        </td>
        <td style="color: #fff;" width="8%">
            Semester
        </td>
        <td  style="color: #fff;" width="12%">
            Jenis Kelamin
        </td>
        <td  style="color: #fff;" width="8%">
            Agama
        </td>
        <td  style="color: #fff;" width="5%">
            Kelas
        </td>
    </tr>
<?php $data = DataMahasiswa::find()->all();
    foreach ($data as $value){
        echo "<tr>";
        echo "<td class='th1'> " .$value->nim. "</td>";
        echo "<td>" .$value->nama. "</td>";
        echo "<td>" .$value->alamat. "</td>";
        echo "<td>" .$value->jurusan. "</td>";
        echo "<td>" .$value->semester. "</td>";
        echo "<td>" .$value->jenis_kel. "</td>";
        echo "<td>" .$value->agama. "</td>";
        echo "<td>" .$value->kelas. "</td>";
        echo "</tr>"; 
    }
    ?>
</table>
</di>