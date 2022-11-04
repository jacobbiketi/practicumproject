<?php
require'dbcon.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-4">
 
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Customer Booking Details
            
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-stripped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>firstname</th>
                  <th>lastname</th>
                  <th>phone_no </th>
                  <th>room_selected </th>
                  <th>days </th>
                  <th>amount </th>
                  
           
                </tr>
              </thead>
              <tbody>
                <?php
                $sql= "SELECT*FROM orders";
                $sql_run=mysqli_query($link,$sql);
                if(mysqli_num_rows($sql_run)>0)
                {
                  foreach($sql_run as $orders)
                  {
                  
                  ?>
                    <tr>
                        <td><?=$orders['id'];?></td>
                        <td><?=$orders['firstname'];?></td>
                        <td><?=$orders['lastname'];?></td>
                        <td><?=$orders['phone_no'];?></td>
                        <td><?=$orders['room_selected'];?></td>
                        <td><?=$orders['days'];?></td>
                        <td><?=$orders['amount'];?></td>
                       </td>
                        
                    </tr>
                   <?php
                  }

                }else{
                  echo "<h5> no record found</h5>";
                }
                ?>;
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>