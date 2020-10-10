<?php
  session_start();

  if(!isset($_SESSION['user'])){
    header("location:index.php");
    exit;
  }

  include("includes/connection_customer.php");

  $rows = [];
  $sql = "SELECT * FROM products";
  $result = $conn_c->query($sql); while($row = $result->fetch_assoc()) { $rows[] = $row; } $result->free(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <style>
            .container {
                margin-top: 8vh;
            }
        </style>
    </head>
    <body>
        <div class=" text-white text-center bg-dark py-2">
            <h2><?php echo "Hello " .$_SESSION['user']['username']; ?></h2>
            <a class="btn btn-secondary mt-2" href="logout.php">logout</a>
        </div>
        <table class="table table-stripped">
            <tr>
                <th>Product</th>
                <th>Date</th>
            </tr>
            <?php foreach($rows as $p) { ?>
            <tr>
                <td><?php echo $p['name']; ?></td>
                <td><?php echo $p['created_at']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
