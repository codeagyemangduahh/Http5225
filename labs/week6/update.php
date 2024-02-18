<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php include("inc/nav.php") ?>
<div class="container">
        <div class="row">
            <h1 class="display-5 mt-3 mb-5">
                Update Student Profile
            </h1>
        </div>
        <?php
          
           $id = $_GET['id'];
           $connect= mysqli_connect('localhost', 'root','', 'phpCoding');
           $query = "SELECT * FROM students WHERE `id` = '$id'";
           $student = mysqli_query($connect, $query);
     
           //print_r($student);
     
           $result = $student -> fetch_assoc();
     
         ?>
        <div class="row">
            <div class="col">
            <form method="POST" action="inc/updateStudent.php">
              <input type="hidden" name="id" value="
              <?php echo $id;
              ?>
              ">
         <div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First Name">
    
  </div>
  <div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last Name">
    <div class="mb-3">
    <label for="marks" class="form-label">Marks</label>
    <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Marks">
    
  </div>
  <div class="mb-3">
    <label for="imageURL" class="form-label">Image URL</label>
    <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Image URL">
    
  </div>
  </div>
  <button type="submit" name="updateStudent" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>

    
</body>
</html>