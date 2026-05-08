

<!-- database connection system in php block -->


<?php

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation system</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<body>

<!-- Navbar section  -->


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">Create</a>
          </li>
         
        </ul>
      
      </div>
    </div>
  </nav>
<!-- student list section  -->
 <div class="container">
        <h2>Students List</h2>
        <table class="table">
             <thead>
                 <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">ID.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Class</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php

            $query = 'SELECT * FROM students';

            $studnets= mysqli_query( $connection, $query);
            
            
            if($studnets){
              $serialNumber = 1;

            while ($row = mysqli_fetch_assoc($studnets)){

                  $id =$row['id'];
                  $name =$row['name'];
                  $roll =$row['roll'];
                  $class =$row['class'];
                  $phone =$row['phone'];
                  $email =$row['email'];
                  $address =$row['address'];

               

                  echo
                    '<tr>
                        <th scope="row">'.$serialNumber.'</th>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$roll.'</td>
                        <td>'.$class.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>
                        <a href="#" class="btn btn-primary">Update</a>
                        <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>';

                  $serialNumber++;

              };

              

            }
            
            ?>
              <!-- <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
              </tr> -->

             
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>