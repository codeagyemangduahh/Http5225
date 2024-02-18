<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <h1 class="display-5 mt-3 mb-5">
                Student catalog
            </h1>
        </div>
    </div>

    <?php
    //connection string
    $connect= mysqli_connect('localhost', 'root','', 'phpCoding');

    $query = 'SELECT * FROM students';

    $students = mysqli_query($connect, $query);

    ?>
    <div class="container d-flex">
            <?php

            foreach($students as $student){
                if($student['marks'] < 50){
                    $bgClass = 'bg-danger';
                }else{
                    $bgClass = 'bg-success';
                }
               echo  '
                   <div class="d-flex flex-column me-5" '. $bgClass .'">
                     <img src="' . $student['imageURL'] . '"class="card-img-top" alt="....">
                        <div class="d-flex flex-column">
                        <h5 class="">' . $student['fname'] . ' ' . $student['lname'] . '</h5>
                       <p class="">Marks: ' . $student['marks'].'</p></div>
                    </div>';
            }

            ?>
    </div>
        
    </div>
</body>
</html>