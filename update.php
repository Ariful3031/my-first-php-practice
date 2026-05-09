
<?php
    include 'config.php';

?>

 
<?php

    if(isset($_GET['id'])){

      $id=$_GET['id'];

        $query= "SELECT * FROM students WHERE id=$id";

        $getSingleData= mysqli_query($connection, $query);


        $data = mysqli_fetch_assoc($getSingleData);

        $name = $data['name'];
        $roll = $data['roll'];
        $class = $data['class'];
        $phone = $data['phone'];
        $email = $data['email'];
        $address = $data['address'];


    }

  

 

    if(isset($_POST['submit'])){

        $id=$_GET['id'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $roll = $_POST['roll'];
        $class = $_POST["class"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

      $query = "UPDATE students SET name='$name', roll='$roll' , class= '$class', email='$email', address='$address' WHERE id=$id";

      $insertStudent = mysqli_query($connection , $query);
  
      if($insertStudent){
        header('location:index.php');
  
      }
  
      else{
        echo "Faild to insert data";
      }

    }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create database</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>


<body>
  
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
    <div class="container">
       <form action="" method="post" >

       <div class="flex">
        
       </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name *</label>
              <input type="text" class="form-control" placeholder="Enter Student Name" name="name" id="name" value="<?php echo $name ?>" required >
            </div>

             <div class="mb-3">
              <label for="email" class="form-label">Email *</label>
              <input type="email" class="form-control" placeholder="Enter Student Email" name="email" id="email" value="<?php echo $email ?>" required>
            </div>

            <div class="mb-3">
              <label for="roll" class="form-label">Roll *</label>
              <input type="number" class="form-control" placeholder="Enter Student Roll" name="roll" id="roll" value="<?php echo $roll ?>" required >
            </div>

            <div class="mb-3">
              <label for="class" class="form-label">Class *</label>
              <input type="number" class="form-control" placeholder="Enter Student Class" name="class" id="class" value="<?php echo $class ?>" required >
            </div>


            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number *</label>
              <input type="number" class="form-control" placeholder="Enter Student Number" name="phone" id="phone" value="<?php echo $phone ?>" required >
            </div>

             <div class="mb-3">
              <label for="address" class="form-label">Address *</label>
              <textarea class="form-control" name="address" id="address" required><?php echo $address ?></textarea>
              <!-- <input type="text" class="form-control" placeholder="Enter Student Address" name="address" id="address" value="<?php echo $address ?>" required > -->
            </div>

       
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>