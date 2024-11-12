<?php
    require 'Object.php'; 
    $mahasiswa = new Mahasiswa();
    $mahasiswa->tambahData("Key", "245150400111045", "Sistem Informasi", "4");
    $mahasiswa->tambahData("Chale", "245150401111045", "Sistem Informasi", "4");
    $mahasiswa->tambahData("Aiko", "245150401111045", "Hukum", "3.33");
    $mahasiswa->tambahData("Keyko", "245150401111045", "Sistem Informasi", "3.5");
    $mahasiswa->tambahData("Athaya Akbar", "245150401111045", "Sistem Informasi", "5");
    ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border= "2" style = "width : 60%; height : 140px; margin-top: 10px; border-collapse: collapse;">
        <thead>
            <th style="padding: 8px; text-align: left;">Nama</th>
            <th style="padding: 8px; text-align: left;">NIM</th>
            <th style="padding: 8px; text-align: left;">Prodi</th>
            <th style="padding: 8px; text-align: left;">IPK</th>
        </thead> 
        <tbody>
        <?php  
         foreach ($mahasiswa->getData() as $key => $value) {
           echo "<tr>
               <td>{$value["Nama"]}</td>
               <td>{$value["NIM"]}</td>
               <td>{$value["Jurusan"]}</td>
               <td>{$value["IPK"]}</td>
             </tr>";
         }
        ?>
        </tbody>
        </table>
</body>
</html>
