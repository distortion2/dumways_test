<?php
include_once("config.php");

$resultCities = mysqli_query($mysqli, "SELECT * FROM cities ORDER BY id DESC");
$resultLastEducation = mysqli_query($mysqli, "SELECT * FROM cities ORDER BY id DESC");

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
    
    <form action="form-biodata.php" method="post" name="form-biodata">
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control col-sm-8">
    </div>
    <div class="form-group">
      <label>Tempat Lahir</label>
      <select class="form-control col-sm-3">
        <?php  
        while($cities = mysqli_fetch_array($resultCities)) {         
            echo "<option>".$cities['nama']."</option>";      }
        ?>
      </select>
    </div>
    <div class="form-group">
     <label>Tanggal Lahir</label>
     <input type="date" name="bday" max="3000-12-31" min="1000-01-01" 
    class="form-control col-sm-8">
    </div>
    <div class="form-group">
      <label>No. Hp</label>
      <input type="number" class="form-control col-sm-8">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control col-sm-8" rows="3">
      </textarea>
    </div>
    <div class="form-group">
      <label>Pendidikan Terakhir</label>
      <select class="form-control col-sm-3">
        <option value="SMK / SMA">SMK / SMA</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
      </select>
    </div>
    <div class="form-group">
      <label>Agama</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Islam" name="agama">
        <label class="form-check-label">
          Islam
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Kristen" name="agama">
        <label class="form-check-label">
          Kristen
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Katolik" name="agama">
        <label class="form-check-label">
          Katolik
        </label>
      </div>
    </div>
    <div class="form-group">
      <label>Hobi</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Membaca">
        <label class="form-check-label">
          Membaca
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Menulis">
        <label class="form-check-label">
          Menulis
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Menabung">
        <label class="form-check-label">
          Menabung
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Traveling">
        <label class="form-check-label">
          Traveling
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Jajan">
        <label class="form-check-label">
          Jajan
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </br>
  </body>
</html>