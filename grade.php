<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
</head>
<body>
    

<?php 



$t = 104;

if ($t <=  32) {
  echo "you are fail";
} elseif ($t <= 39) {
  echo " your garde is: D";
}
  elseif ($t <= 49) {
  echo "your garde is: C";
}
elseif ($t <= 59) {
  echo " your garde is: B";
}
 elseif ($t <= 69) {
  echo " your garde is: A-";
}
 elseif ($t <= 79) {
  echo "your garde is: A ";
}
 elseif ($t <= 100) {
  echo " you got  A+";
}
else {
  echo " Enter Your Correct Value";
}
?>
</body>
</html>