<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
</head>
<body>

<?php
    
    $day = ceil(rand(1, 7));

    switch ( $day ){
        case 1:
            echo "<h1>Today is Monday, keep your energy high </h1>";
            break;
        case 2:
            echo "<h1>Today is Tuesday, keep your energy high </h1>";
            break;
        case 3:
            echo "<h1>Today is Wednesday, almost there for weekend </h1>";
            break;
        case 4:
            echo "<h1>Today is Thursday, almost there for weekend </h1>";
            break;
        case 5:
            echo "<h1>Today is Friday, almost there for weekend </h1>";
            break;
        case 6:
            echo "<h1>Today is Saturday, enjoy your weekend </h1>";
            break;
        case 7:
            echo "<h1>Today is Sunday, enjoy your weekend </h1>";
            break;
        default:
            echo "<h1>You escaped the matrix. </h1>";
            break;          

    }

?>
    
</body>
</html>