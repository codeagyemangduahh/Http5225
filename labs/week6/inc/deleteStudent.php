<?php
if(isset($_GET['deleteStudent'])){
    $id = $_GET['id'];
    
    include('connect.php');
    
    $query ="DELETE FROM students WHERE 'id' ='$id'";
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