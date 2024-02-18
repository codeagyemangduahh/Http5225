<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>Grade</h1> 

       
        <?php

            // get randome number between 1 to 100
            $marks = ceil(rand( 1, 100));
            $grade = "";

            // based on marks get the grade

            if( $marks <= 60 ){

                $grade = "F";
                
            } elseif ( $marks <= 70) {
                
                $grade = "E";
                
            } elseif ( $marks <= 75) {
                
                $grade = "D";
                
            } elseif ( $marks <= 80) {
                
                $grade = "C";
                
            } elseif ( $marks <= 85) {
                
                $grade = "B";
                
            } elseif ( $marks <= 90) {
                
                $grade = "A";
                
            } else {

                $grade = "A+";
                
            }

            // display grade and marks
            echo '<h1> Your marks are : ' . $marks . '</h1>';

            if( $grade === "F"){
                echo '<h1>Sorry, you failed your grade is : ' . $grade . '</h1>';
            } else {
                echo '<h1>You passed :) your grade is : ' . $grade . '</h1>';
            }
            


        ?>

    </body>
</html>