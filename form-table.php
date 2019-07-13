<?php
include_once("config.php");

$resultBiodata = mysqli_query($mysqli, "SELECT 
`biodata`.`id`,
`biodata`.`full_name`, 
`biodata`.`place_of_birth_id`,
`cities`.`nama` as `place_of_birth`,
`biodata`.`date_of_birth`,
`biodata`.`address`,
`biodata`.`phone_number`,
`biodata`.`last_education`,
`biodata`.`religion`,
`biodata`.`hobby`
FROM `biodata` INNER JOIN `cities` WHERE `biodata`.`place_of_birth_id` = `cities`.`id`");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Roby Ardianto - Biodata</title>
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <script src="index.js"></script>
    
    <table class="table table-sm">
    <thead>
      <tr class="table-active">
        <th scope="col">#</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">No. Hp</th>
        <th scope="col">Alamat</th>
        <th scope="col">Pendidikan Terakhir</th>
        <th scope="col">Agama</th>
        <th scope="col">Hobi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($biodata = mysqli_fetch_array($resultBiodata)) {         
            echo "<tr>";
            echo "<th scope='row'>1</th>";
            echo "<td>".$biodata['full_name']."</td>";
            echo "<td>".$biodata['place_of_birth']."</td>";
            echo "<td>".$biodata['date_of_birth']."</td>";       
            echo "<td>".$biodata['phone_number']."</td>";   
            echo "<td>".$biodata['address']."</td>";  
            echo "<td>".$biodata['last_education']."</td>";   
            echo "<td>".$biodata['religion']."</td>";   
            echo "<td>".$biodata['hobby']."</td>";   
            echo "<td><a href='form-edit.php?id=$biodata[id]'>Edit</a> 
            | <a href='delete.php?id=$biodata[id]'>Delete</a></td></tr>";        
        }
      ?>
    </tbody>
  </table>
  </body>
</html>