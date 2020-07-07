<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>What ia the Day??</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
<?php
    $Dayofweek = date("w");

    switch($Dayofweek){
       case 0:
        echo "<p>It is SUNDAY!!</p>";
       break;
       case 1: 
        echo "<p>It is MONDAY!!</p>";
       break;
       case 2: 
        echo "<p>It is TUESDAY!!</p>";
       break;
       case 3: 
        echo "<p>It is WEDNESDAY!!</p>";
       break;
       case 4: 
        echo "<p>It is THURSDAY!!</p>";
       break;
       case 5: 
        echo "<p>It is FRIDAY!!</p>";
       break;
       case 6: 
        echo "<p>It is SATURDAY!!</p>";
       break;
       default: 
        echo "ERROR!";
    }
?>
</body>

</html>