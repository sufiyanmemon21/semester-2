<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>User's Data</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
              <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>

                <?php
                include "connection.php";

                $query = mysqli_query($con, "select * from register");

                foreach($query as $value){
                ?>
                <tr>
                    <td><?php echo $value["id"]?></td>
                    <td><?php echo $value["Name"]?></td>
                    <td><?php echo $value["Email"]?></td>
                    <td><?php echo $value["PASSWORD"]?></td>
                </tr>
                <?php
                
                }
                ?>

                </table>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>