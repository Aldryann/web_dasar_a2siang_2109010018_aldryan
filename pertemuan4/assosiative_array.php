<?php
//contoh 1
$umur = array("Balmond" => "17", "Miya" => "21", "Nana" => "15");
echo "Umur Balmond adalah" . $umur["Balmond"] . "<br>";


?>

<table border="1" style="border-collapse: collapse"> 
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
<?php 
$no = 1;
foreach($umur as $u => $u_value): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $u ?></td>
        <td><?= $u_value ?></td>
    </tr>
<?php endforeach; ?>
</table>