<?php
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD</title>
</head>

<body>


  <div class="container">

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Pengarang</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 ?>
        <?php
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
          <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["tanggal_penerbitan"] ?></td>
            <td><?= $row["Pengarang"] ?></td>
        
          </tr>
          <?php $i++ ?>
        <?php
        endwhile;
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>