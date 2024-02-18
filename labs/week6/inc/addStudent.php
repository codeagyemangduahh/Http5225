<?php
if(isset($_POST['addGrade'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];
    
    include('connect.php');
    
    $query ="INSERT INTO students (fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL',) ";
    $student = mysqli_query($connect, $query);




if(student){
    header('location: ../index.php');
}
else{
    echo mysqli_error($connect);
}
}else{
    echo "You should not be done!";
}